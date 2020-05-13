<div class="sidebar">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="#" class="simple-text logo-mini">{{ __('WL') }}</a>
            <a href="#" class="simple-text logo-normal">{{ __('Waiterless') }}</a>
        </div>
        <ul class="nav">
            <li @if ($pageSlug == 'dashboard') class="active " @endif>
                <a href="{{ route('home') }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
            <li>
                <a data-toggle="collapse" href="#laravel-examples" aria-expanded="true">
                    <i class="fab fa-laravel" ></i>
                    <span class="nav-link-text" >{{ __('Menu') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse show" id="laravel-examples">
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'menu') class="active " @endif>
                            <a href="{{ route('menu.category')  }}">
                                <i class="tim-icons icon-notes"></i>
                                <p>{{ __('Category') }}</p>
                            </a>
                        </li>
                        <li @if ($pageSlug == 'menu') class="active " @endif>
                            <a href="{{ route('menu.dishes')  }}">
                                <i class="tim-icons icon-paper"></i>
                                <p>{{ __('Dishes') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li @if ($pageSlug == 'staff') class="active " @endif>
                <a href="{{ route('staff.cashier_list') }}">
                    <i class="tim-icons icon-badge"></i>
                    <p>{{ __('Staff List') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'customer') class="active " @endif>
                <a href="{{ route('customer.client') }}">
                    <i class="tim-icons icon-single-02"></i>
                    <p>{{ __('Customer List') }}</p>
                </a>
            </li>
        </ul>
    </div>
</div>
