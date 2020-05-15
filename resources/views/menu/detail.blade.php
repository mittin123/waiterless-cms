@extends('layouts.app', ['page' => __('User Profile'), 'pageSlug' => 'profile'])

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-user">
                <div class="card-body">
                    <p class="card-text">
                        <div class="author">
                            <div class="block block-one"></div>
                            <div class="block block-two"></div>
                            <div class="block block-three"></div>
                            <div class="block block-four"></div>
                            <a href="#">
                                <img class="" src="https://beptruong.edu.vn/wp-content/uploads/2018/06/bun-rieu-cua.jpg" alt="">
                                <h3 class="title">Boon Real Cua</h3>
                            </a>
                            <p class="description" style="font-size: 30px">
                                {{ __('Price: 35.000 VND') }}
                            </p>
                        </div>
                    </p>
                    <div class="card-description" style="font-size: 20px">
                        {{ __('Bún riêu is a traditional Vietnamese soup of clear stock and rice vermicelli. There are several varieties of bún riêu, including bún riêu cua (minced crab), bún riêu cá (fish) and bún riêu ốc (snail). This dish is well-known in the country and in the world.') }}
                    </div>
                    <p class="card-description" style="font-size: 15px">
                        {!! nl2br('Ingredients:
                        - Paddy crabs (crab meat and crab roe)
                        - Tomato
                        - Egg
                        - Materials make a sour like garcinia multiflora (quả dọc), dracontomelon (quả sấu), tamarind (quả me), starfruit (quả khế)
                        - Onion
                        - Tofu
                        - Vegetables: perilla (tía tô), Vietnamese balm (kinh giới), sliced banana flowers (hoa chuối thái nhỏ), rau muống, ferment or rice vinegar (mẻ hoặc giấm bổng)') !!}
                    </p>
                </div>
                <div class="card-footer">

                </div>
            </div>
        </div>
    </div>
@endsection
