<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Comments;
use App\Models\Salon;
use App\Models\User;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class SalonController extends Controller
{
    public function register()
    {
        $salonCars = Car::where('user_id', auth()->id())
            ->whereNotNull('salon_id')
            ->where('status', 1)
            ->get();
        // dd($salonCars);
        $totalView = 0;
        $totalComment = 0;
        $totalSavedCar = 0;
        foreach ($salonCars as $car) {
            $view = views($car)->count();
            $totalView += $view;
            $totalComment += Comments::where('car_id', $car->id)
                ->count();
            $totalSavedCar += Wishlist::where('car_id', $car->id)
                ->count();
        }

        return view('salon.index', [
            'salonCars' => $salonCars,
            'totalView' => $totalView,
            'totalComment' => $totalComment,
            'totalSavedCar' => $totalSavedCar
        ]);
    }

    public function registerSalon(Request $request)
    {
        if ($request->images) {
            foreach ($request->images as $image) {
                $images[] = uploadFile('salon', $image);
            }
        }

        $salonData = array(
            'salon_name' => $request->storeName,
            'address' => $request->storeAddress,
            'description' => $request->storeIntro,
            'phone_number' => $request->phoneNumber,
            'email' => $request->email,
            'image_salon' => $images,
            'user_id' => auth()->id()
        );
        $result = Salon::create($salonData);

        if ($result) {
            return redirect()->route('profile')->with('status', 'Quản trị viên sẽ phê duyệt sớm nhất yêu cầu của bạn!');
        }
    }

    public function addCar()
    {
        return view('salon.add');
    }
    public function editCar($carId)
    {
        return view('salon.edit', compact('carId'));
    }

    public function deleteCar($carId)
    {
        if (auth()->check()) {
            $car = Car::find($carId);
            if (auth()->id() == $car->user_id) {
                $deleteCar = Car::where('id', $carId)->delete();
                return redirect()->back()->with('success', 'Xóa thành công');
            }
        }
    }

    public function getBalance(Request $request)
    {
        $userId = $request->input('user_id');
        $user = User::find($userId);

        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }

        $balance = $user->account_balence;

        if ($balance >= 300000) {
            $message = "<div class='alert alert-info'>Số dư của bạn là <strong>" . number_format($balance) . "đ</strong>. <br>Sau khi được quản trị viên phê duyệt, số dư sẽ tự động được trừ vào tài khoản của bạn.</div>";
            return response()->json(['balance' => $balance, 'message' => $message]);
        } else {
            $message = "<div class='alert alert-warning'>Số dư của bạn là <strong>" . number_format($balance) . "đ</strong>. <br>Bạn cần nạp thêm tiền tại <a href='/nap-tien'> đây</a>, số dư sẽ được tự động trừ khi quản trị viên phê duyệt yêu cầu của bạn.</div>";
            return response()->json(['balance' => $balance, 'message' => $message]);
        }
    }


    public function listCars($salonID)
    {
        $cars = Car::where('salon_id', $salonID)->get();
        return view('salon.danh-sach-xe', compact('cars'));
    }
}
