<?php

namespace App\Livewire;

use App\Models\Car;
use App\Models\Brand;
use Livewire\Component;
use App\Models\ModelCar;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Livewire\Attributes\Computed;

class FormSuaTin extends Component
{
    use WithFileUploads;
    #define requirement

    public $id;
    public $brands;
    public $car;
    public $currentStep = 1;
    public $fuels = ["Xăng", "Dầu Diesl", "Điện", "Loại khác"];
    public $colors = [
        'red' => 'Đỏ',
        'silver' => 'Bạc',
        'black' => 'Đen',
        'white' => 'Trắng',
        'yellow' => 'Vàng',
        'gray' => 'Ghi',
        'blue' => 'Xanh',
        'multiple_color' => 'Nhiều màu'
    ];
    public $featureValues = [
        'PremiumWheel' => 'Bánh xe cao cấp',
        'Moonroof' => 'Cửa sổ trời',
        'PremiumAudio' => 'Âm thanh cao cấp',
        'Navigation' => 'Chế độ chỉ đường',
        'PremiumSeatMaterial' => 'Ghế da cao cấp',
        'Bluetooth' => 'Kết nối bluetooth',
        'RemoteEngineStart' => 'Khởi động từ xa',
        'Multi_ZoneClimateControl' => 'Điều hòa'
    ];
    public $seats = [
        '4' => '4',
        '5' => '5',
        '6' => '6',
        '7' => '7',
        '8' => '8',
    ];
    public $years = [2023, 2022, 2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2012, 2011, 2010, 'others'];
    public $verhicle_image_library = [];
    public $brand_select = '';
    public $model_select = '';
    public $models = [];
    public $image_library;
    public $transmission;
    public $fuel;
    public $number_of_seats;
    public $color;
    public $version;
    public $condition;
    public $mileage;
    public $price;
    public $title;
    public $description;
    public $phone;
    public $name;
    public $email;
    public $district_id;
    public $city_id;
    public $full_address;
    public $year_of_manufacture;
    public $engine;
    public $verhicle_videos;
    public $features = [];

    public function previousStepSubmit()
    {
        return $this->currentStep--;
    }

    public function secondStepSubmit()
    {
        $this->validate([
            'brand_select' => 'required',
            'model_select' => 'required',
            'transmission' => 'required',
            'fuel' => 'required',
            'number_of_seats' => 'required',
            'color' => 'required',
            'version' => 'required',
            "engine" => 'required',
            'year_of_manufacture' => 'required',
            'mileage' => 'required',
            'price' => 'required',
            'title' => 'required',
            'description' => 'required'
        ]);
        return $this->currentStep++;
    }

    public function thirdStepSubmit()
    {
        $this->validate([
            'phone' => 'required',
            'city_id' => 'required',
            'district_id' => 'required',
            'full_address' => 'required',
        ]);
        return $this->currentStep++;
    }

    public function fourthStepSubmit()
    {
        $this->validate([
            'verhicle_image_library' => 'required|image|max:10024',
            'verhicle_videos' => 'required|video|max:10024',
        ]);
    }

    public function mount()
    {
        $this->brands = Brand::all();
        $this->car = Car::where('id', $this->id)->first();
        $this->brand_select = $this->car->brand_id;
        $this->model_select = $this->car->model_car_id;
        $this->fuel = $this->car->car_info['fuelType'];
        $this->number_of_seats = $this->car->car_info['number_of_seats'];
        $this->version = $this->car->car_info['version'];
        $this->year_of_manufacture = $this->car->car_info['year_of_manufacture'];
        $this->mileage = $this->car->car_info['mileage'];
        $this->price = $this->car->price;
        $this->engine = $this->car->car_info['engine'];
        $this->title = $this->car->title;
        $this->description = $this->car->description;
        $this->color = $this->car->car_info['color'];
        $this->transmission = $this->car->car_info['transmission'];
        $this->features = $this->car->car_info['features'];
        $this->phone = $this->car->contact['phone'];
        $this->email = $this->car->contact['email'];
        $this->city_id = $this->car->city_id;
        $this->district_id = $this->car->district_id;
        $this->full_address = $this->car->full_address;

    }

    public function updateCar()
    {
        $carData = [];
        $photoName = [];
        if ($this->verhicle_image_library) {
            foreach ($this->car->verhicle_image_library as $photo) {
                Storage::delete('/public/' . $photo);
            }
            foreach ($this->verhicle_image_library as $photo) {
                $fileName = $photo->getFilename();
                $dir_name = 'car_photos';
                $photo->storeAs('car_photos', $fileName, 'public');
                array_push($photoName, $dir_name . '/' . $fileName);
            }
            $carData['verhicle_image_library'] = $photoName;
        }
        if ($this->verhicle_videos) {
            Storage::delete('/public/' . $this->car->verhicle_videos);
            $dir_name = 'video_car';
            $file = uploadFile($dir_name, $this->verhicle_videos);
            $videoName = $file;
            $carData['verhicle_videos'] = $videoName;
        }
        $carData['user_id'] = auth()->id();
        $carData['title'] = $this->title;
        $carData['slug'] = Str::slug($carData['title']);
        $carData['price'] = $this->price;
        $carData['brand_id'] = $this->brand_select;
        $carData['model_car_id'] = $this->model_select;
        $carData['city_id'] = $this->city_id;
        $carData['district_id'] = $this->district_id;
        $carData['full_address'] = $this->full_address;
        $carData['description'] = $this->description;
        $carData['car_info'] = array(
            "year_of_manufacture" => $this->year_of_manufacture,
            'transmission' => $this->transmission,
            'fuelType' => $this->fuel,
            'number_of_seats' => $this->number_of_seats,
            'color' => $this->color,
            'version' => $this->version,
            'condition' => $this->condition,
            'mileage' => $this->mileage,
            "features" => $this->features,
            'engine' => $this->engine,
        );
        $carData['contact'] = array(
            'name' => $this->name,
            'phone' => $this->phone,
            'email' => $this->email,
        );
        $result = Car::findOrFail($this->id)->update($carData);
        if ($result) {
            return redirect()->route('profile')->with('status', 'Cập nhật thành công!');
        }
    }

    #[Computed()]
    public function render()
    {
        if (!empty($this->brand_select) && $this->brand_select != 0) {
            $this->models = ModelCar::where('brand_id', $this->brand_select)->get();
        }
        return view('livewire.form-sua-tin');
    }
}
