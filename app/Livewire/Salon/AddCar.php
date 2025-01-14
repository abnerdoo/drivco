<?php

namespace App\Livewire\Salon;

use App\Models\Brand;
use App\Models\Car;
use App\Models\ModelCar;
use App\Models\Salon;
use Illuminate\Support\Str;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddCar extends Component
{
    use WithFileUploads;
    //define requirement

    public $salon;

    public $fuels = [
        'Xăng',
        'Dầu Diesl',
        'Điện',
        'Loại khác',
    ];

    public $colors = [
        'black' => 'Đen',
        'white' => 'Trắng',
        'silver' => 'Bạc',
        'gray' => 'Ghi',
        'red' => 'Đỏ',
        'blue' => 'Xanh',
        'beige' => 'Be',
        'green' => 'Xanh lá',
        'yellow' => 'Vàng',
        'purple' => 'Tím',
        'brown' => 'Nâu',
        'different' => 'Khác',
    ];

    public $featureValues = [
        'PremiumWheel' => 'Bánh xe cao cấp',
        'Moonroof' => 'Cửa sổ trời',
        'PremiumAudio' => 'Âm thanh cao cấp',
        'PremiumSeatMaterial' => 'Ghế da cao cấp',
        'Bluetooth' => 'Kết nối bluetooth',
        'RemoteEngineStart' => 'Khởi động từ xa',
        'Navigation' => 'Chế độ chỉ đường',
        'ParkingCamera' => 'Camera đỗ xe',
        'ParkingSensors' => 'Cảm biến',
        'AutonomousDriving' => 'Lái xe tự động',
        'BlindSpotAssist' => 'Hỗ trợ điểm mù',
        'LaneAssist' => 'Hỗ trợ làn đường',
    ];

    public $seats = [
        '4' => '4',
        '5' => '5',
        '6' => '6',
        '7' => '7',
        '8' => '8',
    ];

    public $years = [
        2023,
        2022,
        2021,
        2020,
        2019,
        2018,
        2017,
        2016,
        2015,
        2014,
        2013,
        2012,
        2011,
        2010,
        'others',
    ];

    public $models = [];

    #[Validate('required', message: 'Bắt buộc phải upload tối thiểu 1 hình.')]
    public $verhicle_image_library = [];

    public $verhicle_videos;

    #[Validate('required', message: 'Bắt buộc phải chọn thương hiệu.')]
    public $brand_select = '';

    #[Validate('required', message: 'Bắt buộc phải chọn tên xe.')]
    public $model_select = '';

    #[Validate('required', message: 'Bắt buộc phải chọn hộp số.')]
    public $transmission;

    #[Validate('required', message: 'Bắt buộc phải chọn loại nhiên liệu.')]
    public $fuel;

    #[Validate('required', message: 'Bắt buộc phải chọn số chỗ ngồi.')]
    public $number_of_seats;

    #[Validate('required', message: 'Bắt buộc phải chọn màu sắc.')]
    public $color;

    public $version;

    #[Validate('required', message: 'Bắt buộc phải nhập số KM.')]
    public $mileage;

    #[Validate('required', message: 'Bắt buộc phải nhập giá.')]
    public $price;

    #[Validate('required', message: 'Bắt buộc phải nhập tiêu đề.')]
    public $title;

    #[Validate('required', message: 'Bắt buộc phải nhập mô tả.')]
    public $description;

    #[Validate('required', message: 'Bắt buộc phải nhập năm sản xuất.')]
    public $year_of_manufacture;

    #[Validate('required', message: 'Bắt buộc phải nhập số mã lực.')]
    public $engine;

    #[Validate('required', message: 'Bắt buộc phải chọn một số tính năng khác.')]
    public $features = [];

    public function saveCar()
    {

        $this->validate();

        $carData = [];
        $photoName = [];

        $images = $this->verhicle_image_library;
        if (count($images) > 0) {
            foreach ($images as $photo) {
                $dir_name_image = 'car_photos';
                $fileImage = uploadFile($dir_name_image, $photo);
                array_push($photoName, $fileImage);
            }
        }
        $videoName = '';
        if (! empty($this->verhicle_videos)) {
            $dir_name_video = 'video_car';
            $fileVideo = uploadFile($dir_name_video, $this->verhicle_videos);
            $videoName = $fileVideo;
        }
        // dd(array($videoName, $photoName));
        $carData['verhicle_image_library'] = $photoName;
        $carData['verhicle_videos'] = $videoName;
        $carData['user_id'] = auth()->id();
        $carData['title'] = $this->title;
        $carData['slug'] = Str::slug($carData['title']);
        $carData['price'] = $this->price;
        $carData['brand_id'] = $this->brand_select;
        $carData['model_car_id'] = $this->model_select;
        $carData['full_address'] = $this->salon->address;
        $carData['description'] = $this->description;
        $carData['car_info'] = [
            'year_of_manufacture' => $this->year_of_manufacture,
            'transmission' => $this->transmission,
            'fuelType' => $this->fuel,
            'number_of_seats' => $this->number_of_seats,
            'color' => $this->color,
            'version' => $this->version,
            'mileage' => $this->mileage,
            'features' => $this->features,
            'engine' => $this->engine,
        ];
        $carData['contact'] = [
            'name' => $this->salon->salon_name,
            'phone' => $this->salon->phone_number,
            'email' => $this->salon->email,
        ];
        $carData['salon_id'] = $this->salon->id;
        $carData['status'] = 0;

        Car::create($carData);

        // if ($result) {
        return redirect()->route('salon')->with('status', 'Đăng tin thành công! Vui lòng chờ duyệt.');
    }

    #[Computed()]
    public function render()
    {
        $salonInfo = Salon::where('user_id', auth()->id())->first();

        if ($salonInfo) {
            $this->salon = $salonInfo;
        }

        if (! empty($this->brand_select) && $this->brand_select != 0) {
            $this->models = ModelCar::where('brand_id', $this->brand_select)->get();
        }
        $brands = Brand::all();

        return view('livewire.salon.add-car', [
            'brands' => $brands,
            'salonInfo' => $salonInfo,
        ]);
    }
}
