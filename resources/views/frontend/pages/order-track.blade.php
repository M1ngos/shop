@extends('frontend.layouts.master')

@section('title','Rastreamento de pedido')

@section('main-content')
    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="{{route('home')}}">Pagina inicial<i class="ti-arrow-right"></i></a></li>
                            <li class="active"><a href="javascript:void(0);">Rastreamento de pedido</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->
<section class="tracking_box_area section_gap py-5">
    <div class="container">
        <div class="tracking_box_inner">
            <p>Para rastrear seu pedido, insira o ID do seu pedido na caixa abaixo e pressione o botão "Rastrear". Isto foi dado
                para você no seu recibo e no e-mail de confirmação que você deveria ter recebido.</p>
            <form class="row tracking_form my-4" action="{{route('product.track.order')}}" method="post" novalidate="novalidate">
              @csrf
                <div class="col-md-8 form-group">
                    <input type="text" class="form-control p-2"  name="order_number" placeholder="Enter your order number">
                </div>
                <div class="col-md-8 form-group">
                    <button type="submit" value="submit" class="btn submit_btn">Acompanhar Pedido</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection