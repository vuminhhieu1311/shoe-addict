@extends('layouts.admin')

@section('css')
    <!--begin::Page Vendor Stylesheets(used by this page)-->
    <link href="{{ asset('metronic/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <!--end::Page Vendor Stylesheets-->
@endsection

@section('content')
    @include('components.admin.header', [
        'parent' => __('messages.orders'),
        'child' => 'EG000' . $order->id,
    ])

    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
                <!--begin::Order details page-->
                <div class="d-flex flex-column gap-7 gap-lg-10">
                    <!--begin::Order summary-->
                    <div class="d-flex flex-column flex-xl-row gap-7 gap-lg-10">
                        <!--begin::Order details-->
                        <div class="card card-flush py-4 flex-row-fluid">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>{{ __('messages.order_detail') }} (#{{ 'EG000' . $order->id }})</h2>
                                </div>
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table align-middle table-row-bordered mb-0 fs-6 gy-5 min-w-300px">
                                        <!--begin::Table body-->
                                        <tbody class="fw-bold text-gray-600">
                                            <tr>
                                                <td class="text-muted">
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Svg Icon | path: icons/duotune/finance/fin008.svg-->
                                                        <span class="svg-icon svg-icon-2 me-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <path opacity="0.3"
                                                                    d="M3.20001 5.91897L16.9 3.01895C17.4 2.91895 18 3.219 18.1 3.819L19.2 9.01895L3.20001 5.91897Z"
                                                                    fill="black" />
                                                                <path opacity="0.3"
                                                                    d="M13 13.9189C13 12.2189 14.3 10.9189 16 10.9189H21C21.6 10.9189 22 11.3189 22 11.9189V15.9189C22 16.5189 21.6 16.9189 21 16.9189H16C14.3 16.9189 13 15.6189 13 13.9189ZM16 12.4189C15.2 12.4189 14.5 13.1189 14.5 13.9189C14.5 14.7189 15.2 15.4189 16 15.4189C16.8 15.4189 17.5 14.7189 17.5 13.9189C17.5 13.1189 16.8 12.4189 16 12.4189Z"
                                                                    fill="black" />
                                                                <path
                                                                    d="M13 13.9189C13 12.2189 14.3 10.9189 16 10.9189H21V7.91895C21 6.81895 20.1 5.91895 19 5.91895H3C2.4 5.91895 2 6.31895 2 6.91895V20.9189C2 21.5189 2.4 21.9189 3 21.9189H19C20.1 21.9189 21 21.0189 21 19.9189V16.9189H16C14.3 16.9189 13 15.6189 13 13.9189Z"
                                                                    fill="black" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->{{ __('messages.status') }}
                                                    </div>
                                                </td>
                                                <td class="fw-bolder text-end">
                                                    <select class="form-select mb-2" name="status" data-control="select2"
                                                        data-hide-search="true" data-placeholder="Select an option"
                                                        id="status-select"
                                                        data-url="{{ route('orders.update', ['order' => $order->id]) }}">
                                                        @if ($order->status !== 'canceled')
                                                            <option value="pending"
                                                                @if ($order->status === 'pending') selected @endif>
                                                                {{ __('messages.pending') }}
                                                            </option>
                                                            <option value="delivering"
                                                                @if ($order->status === 'delivering') selected @endif>
                                                                {{ __('messages.delivering') }}
                                                            </option>
                                                            <option value="delivered"
                                                                @if ($order->status === 'delivered') selected @endif>
                                                                {{ __('messages.delivered') }}
                                                            </option>
                                                        @endif
                                                        @if ($order->status !== 'delivered')
                                                            <option value="canceled"
                                                                @if ($order->status === 'canceled') selected @endif>
                                                                {{ __('messages.canceled') }}
                                                            </option>
                                                        @endif
                                                    </select>
                                                </td>
                                            </tr>
                                            <!--begin::Date-->
                                            <tr>
                                                <td class="text-muted">
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Svg Icon | path: icons/duotune/files/fil002.svg-->
                                                        <span class="svg-icon svg-icon-2 me-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                height="21" viewBox="0 0 20 21" fill="none">
                                                                <path opacity="0.3"
                                                                    d="M19 3.40002C18.4 3.40002 18 3.80002 18 4.40002V8.40002H14V4.40002C14 3.80002 13.6 3.40002 13 3.40002C12.4 3.40002 12 3.80002 12 4.40002V8.40002H8V4.40002C8 3.80002 7.6 3.40002 7 3.40002C6.4 3.40002 6 3.80002 6 4.40002V8.40002H2V4.40002C2 3.80002 1.6 3.40002 1 3.40002C0.4 3.40002 0 3.80002 0 4.40002V19.4C0 20 0.4 20.4 1 20.4H19C19.6 20.4 20 20 20 19.4V4.40002C20 3.80002 19.6 3.40002 19 3.40002ZM18 10.4V13.4H14V10.4H18ZM12 10.4V13.4H8V10.4H12ZM12 15.4V18.4H8V15.4H12ZM6 10.4V13.4H2V10.4H6ZM2 15.4H6V18.4H2V15.4ZM14 18.4V15.4H18V18.4H14Z"
                                                                    fill="black" />
                                                                <path
                                                                    d="M19 0.400024H1C0.4 0.400024 0 0.800024 0 1.40002V4.40002C0 5.00002 0.4 5.40002 1 5.40002H19C19.6 5.40002 20 5.00002 20 4.40002V1.40002C20 0.800024 19.6 0.400024 19 0.400024Z"
                                                                    fill="black" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->{{ __('messages.creation_date') }}
                                                    </div>
                                                </td>
                                                <td class="fw-bolder text-end">{{ $order->created_at->format('d/m/Y') }}
                                                </td>
                                            </tr>
                                            <!--end::Date-->
                                            <!--begin::Date-->
                                            <tr>
                                                <td class="text-muted">
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Svg Icon | path: icons/duotune/files/fil002.svg-->
                                                        <span class="svg-icon svg-icon-2 me-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                height="21" viewBox="0 0 20 21" fill="none">
                                                                <path opacity="0.3"
                                                                    d="M19 3.40002C18.4 3.40002 18 3.80002 18 4.40002V8.40002H14V4.40002C14 3.80002 13.6 3.40002 13 3.40002C12.4 3.40002 12 3.80002 12 4.40002V8.40002H8V4.40002C8 3.80002 7.6 3.40002 7 3.40002C6.4 3.40002 6 3.80002 6 4.40002V8.40002H2V4.40002C2 3.80002 1.6 3.40002 1 3.40002C0.4 3.40002 0 3.80002 0 4.40002V19.4C0 20 0.4 20.4 1 20.4H19C19.6 20.4 20 20 20 19.4V4.40002C20 3.80002 19.6 3.40002 19 3.40002ZM18 10.4V13.4H14V10.4H18ZM12 10.4V13.4H8V10.4H12ZM12 15.4V18.4H8V15.4H12ZM6 10.4V13.4H2V10.4H6ZM2 15.4H6V18.4H2V15.4ZM14 18.4V15.4H18V18.4H14Z"
                                                                    fill="black" />
                                                                <path
                                                                    d="M19 0.400024H1C0.4 0.400024 0 0.800024 0 1.40002V4.40002C0 5.00002 0.4 5.40002 1 5.40002H19C19.6 5.40002 20 5.00002 20 4.40002V1.40002C20 0.800024 19.6 0.400024 19 0.400024Z"
                                                                    fill="black" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->{{ __('messages.last_modified') }}
                                                    </div>
                                                </td>
                                                <td class="fw-bolder text-end">{{ $order->updated_at->format('d/m/Y') }}
                                                </td>
                                            </tr>
                                            <!--end::Date-->
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Order details-->
                        <!--begin::Customer details-->
                        <div class="card card-flush py-4 flex-row-fluid">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>{{ __('messages.customer_detail') }}</h2>
                                </div>
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table align-middle table-row-bordered mb-0 fs-6 gy-5 min-w-300px">
                                        <!--begin::Table body-->
                                        <tbody class="fw-bold text-gray-600">
                                            <!--begin::Customer name-->
                                            <tr>
                                                <td class="text-muted">
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
                                                        <span class="svg-icon svg-icon-2 me-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <path opacity="0.3"
                                                                    d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z"
                                                                    fill="black" />
                                                                <path
                                                                    d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z"
                                                                    fill="black" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->{{ __('messages.customer') }}
                                                    </div>
                                                </td>
                                                <td class="fw-bolder text-end">
                                                    <div class="d-flex align-items-center justify-content-end">
                                                        <!--begin:: Avatar -->
                                                        <div class="symbol symbol-circle symbol-25px overflow-hidden me-3">
                                                            <a>
                                                                <div class="symbol-label">
                                                                    <img
                                                                        src="{{ Avatar::create($order->user->name)->setFontSize(10)->toBase64() }}" />
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <!--end::Avatar-->
                                                        <!--begin::Name-->
                                                        <a
                                                            class="text-gray-600 text-hover-primary">{{ $order->user->name }}</a>
                                                        <!--end::Name-->
                                                    </div>
                                                </td>
                                            </tr>
                                            <!--end::Customer name-->
                                            <!--begin::Customer email-->
                                            <tr>
                                                <td class="text-muted">
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
                                                        <span class="svg-icon svg-icon-2 me-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <path opacity="0.3"
                                                                    d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z"
                                                                    fill="black" />
                                                                <path
                                                                    d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z"
                                                                    fill="black" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->Email
                                                    </div>
                                                </td>
                                                <td class="fw-bolder text-end">
                                                    <a href="../../demo8/dist/apps/user-management/users/view.html"
                                                        class="text-gray-600 text-hover-primary">{{ $order->user->email }}</a>
                                                </td>
                                            </tr>
                                            <!--end::Payment method-->
                                            <!--begin::Date-->
                                            <tr>
                                                <td class="text-muted">
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Svg Icon | path: icons/duotune/electronics/elc003.svg-->
                                                        <span class="svg-icon svg-icon-2 me-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <path
                                                                    d="M5 20H19V21C19 21.6 18.6 22 18 22H6C5.4 22 5 21.6 5 21V20ZM19 3C19 2.4 18.6 2 18 2H6C5.4 2 5 2.4 5 3V4H19V3Z"
                                                                    fill="black" />
                                                                <path opacity="0.3" d="M19 4H5V20H19V4Z"
                                                                    fill="black" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->{{ __('messages.phone_number') }}
                                                    </div>
                                                </td>
                                                <td class="fw-bolder text-end">{{ $order->user->phone_number }}</td>
                                            </tr>
                                            <!--end::Date-->
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Customer details-->
                    </div>
                    <!--end::Order summary-->
                    <!--begin::Orders-->
                    <div class="d-flex flex-column gap-7 gap-lg-10">
                        <div class="d-flex flex-column flex-xl-row gap-7 gap-lg-10">
                            <!--begin::Payment address-->
                            <div class="card card-flush py-4 flex-row-fluid overflow-hidden">
                                <!--begin::Background-->
                                <div class="position-absolute top-0 end-0 opacity-10 pe-none text-end">
                                    <img src="{{ asset('metronic/assets/media/icons/duotune/ecommerce/ecm001.svg') }}"
                                        class="w-150px" />
                                </div>
                                <!--end::Background-->
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <div class="card-title">
                                        <h2>{{ __('messages.order_review') }}</h2>
                                    </div>
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    @if ($order->rating)
                                        <div class="d-flex align-items-center">
                                            <img style="height:50px;margin-right:10px;"
                                                src="{{ Avatar::create($order->user->name)->setFontSize(35)->toBase64() }}" />
                                            <div>
                                                @include('components.view_rating', [
                                                    'rating' => $order->rating->rating,
                                                ])
                                                <div class="mt-2">{{ $order->rating->comment }}</div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Payment address-->
                            <!--begin::Shipping address-->
                            <div class="card card-flush py-4 flex-row-fluid overflow-hidden">
                                <!--begin::Background-->
                                <div class="position-absolute top-0 end-0 opacity-10 pe-none text-end">
                                    <img src="{{ asset('metronic/assets/media/icons/duotune/ecommerce/ecm006.svg') }}"
                                        class="w-150px" />
                                </div>
                                <!--end::Background-->
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <div class="card-title">
                                        <h2>{{ __('messages.billing_address') }}</h2>
                                    </div>
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    {{ $order->delivery_address }}
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Shipping address-->
                        </div>
                        <!--begin::Product List-->
                        <div class="card card-flush py-4 flex-row-fluid overflow-hidden">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>{{ __('messages.order') }} #EG000{{ $order->id }}</h2>
                                </div>
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0">
                                        <!--begin::Table head-->
                                        <thead>
                                            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                <th class="min-w-175px">{{ __('messages.product') }}</th>
                                                <th class="min-w-100px text-end">ID</th>
                                                <th class="min-w-70px text-end">{{ __('messages.quantity') }}</th>
                                                <th class="min-w-100px text-end">{{ __('messages.price') }}</th>
                                                <th class="min-w-100px text-end">{{ __('messages.total2') }}</th>
                                            </tr>
                                        </thead>
                                        <!--end::Table head-->
                                        <!--begin::Table body-->
                                        <tbody class="fw-bold text-gray-600">
                                            @foreach ($order->products as $product)
                                                <!--begin::Products-->
                                                <tr>
                                                    <!--begin::Product-->
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Thumbnail-->
                                                            <a href="" class="symbol symbol-50px">
                                                                <span class="symbol-label"
                                                                    style="{{ 'background-image:url(' . asset($product->avatar_url) . ');' }}"></span>
                                                            </a>
                                                            <!--end::Thumbnail-->
                                                            <!--begin::Title-->
                                                            <div class="ms-5">
                                                                <a href=""
                                                                    class="fw-bolder text-gray-600 text-hover-primary">
                                                                    {{ $product->name }}
                                                                </a>
                                                                <div class="fs-7 text-muted">
                                                                    {{ __('messages.creation_date') }}:
                                                                    {{ $product->created_at->format('d/m/Y') }}
                                                                </div>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                    </td>
                                                    <!--end::Product-->
                                                    <!--begin::SKU-->
                                                    <td class="text-end">{{ $product->id }}</td>
                                                    <!--end::SKU-->
                                                    <!--begin::Quantity-->
                                                    <td class="text-end">{{ $product->pivot->quantity }}</td>
                                                    <!--end::Quantity-->
                                                    <!--begin::Price-->
                                                    <td class="text-end">@money($product->pivot->price, 'VND')</td>
                                                    <!--end::Price-->
                                                    <!--begin::Total-->
                                                    <td class="text-end">@money($product->pivot->price * $product->pivot->quantity, 'VND')</td>
                                                    <!--end::Total-->
                                                </tr>
                                                <!--end::Products-->
                                            @endforeach
                                            <!--begin::Subtotal-->
                                            <tr>
                                                <td colspan="4" class="text-end">{{ __('messages.subtotal') }}</td>
                                                <td class="text-end">@money($order->total - $order->tax, 'VND')</td>
                                            </tr>
                                            <!--end::Subtotal-->
                                            <!--begin::VAT-->
                                            <tr>
                                                <td colspan="4" class="text-end">VAT (8%)</td>
                                                <td class="text-end">@money($order->tax, 'VND')</td>
                                            </tr>
                                            <!--end::VAT-->
                                            <!--begin::Grand total-->
                                            <tr>
                                                <td colspan="4" class="fs-3 text-dark text-end">
                                                    {{ __('messages.total') }}
                                                </td>
                                                <td class="text-dark fs-3 fw-boldest text-end">@money($order->total, 'VND')</td>
                                            </tr>
                                            <!--end::Grand total-->
                                        </tbody>
                                        <!--end::Table head-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Product List-->
                    </div>
                    <!--end::Orders-->
                </div>
                <!--end::Order details page-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
    <!--end::Content-->
@endsection

@section('js')
    <script src="{{ asset('resources/js/order/show.js') }}"></script>
@endsection
