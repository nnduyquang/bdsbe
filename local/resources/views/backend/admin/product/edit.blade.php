@extends('backend.admin.master')
@section('styles')
@stop
@section('scripts')
@stop
@section('container')
    <div class="col-lg-12">
        <div class="row">
            <div class="col-md-8">
                <h2>Cập Nhật Sản Phẩm</h2>
            </div>
            <div class="col-md-4 text-right">
                <a class="btn btn-primary" href="{{ route('product.index') }}"> Back</a>
            </div>
        </div>
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Úi!</strong> Hình Như Có Gì Đó Sai Sai.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!! Form::model($product,array('route' => ['product.update',$product->id],'method'=>'PATCH')) !!}
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6">
                <strong>Tên Sản Phẩm:</strong>
                {!! Form::text('name',null, array('placeholder' => 'Tên','class' => 'form-control')) !!}
                <div class="form-group">
                    <strong>Mô Tả Ngắn:</strong>
                    {!! Form::textarea('description',null,array('placeholder' => '','id'=>'description-page','class' => 'form-control','rows'=>'10','style'=>'resize:none')) !!}
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <strong>Hình Đại Diện: </strong>
                    {!! Form::text('image', url('/').'/'.$product->image, array('class' => 'form-control','id'=>'pathImage')) !!}
                    <br>
                    {!! Form::button('Tìm', array('id' => 'btnBrowseImage','class'=>'btn btn-primary')) !!}
                </div>
                <div class="form-group">
                    {{ Html::image($product->image,'',array('id'=>'showHinh','class'=>'show-image'))}}
                </div>
                <div class="form-group">
                    {!! Form::button('Thêm Hình Dự Án', array('id' => 'btnBrowseMore','class'=>'btn btn-primary')) !!}
                </div>
                <div class="form-group">
                    <div id="add-image" class="row">
                        @php
                            $listImage=explode(';',$product->sub_image);
                        @endphp
                        @foreach($listImage as $key=>$item)
                            <div class="col-md-3 text-center one-image">
                                {{ Html::image($item,'',array('id'=>'showHinh','class'=>'image-choose'))}}
                                {{ Form::hidden('image-choose[]', $item) }}
                                <span class='remove-image'>X</span>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="form-group">
                    <strong>Loại Sản Phẩm</strong>
                    <select class="form-control" name="category_product">'
                        @foreach($dd_category_products as $key=>$data) {
                        @if($data['index']===$product->category_product_id)
                            <option value="{{$data['index']}}" selected>{{$data['value']}}</option>
                        @else
                            <option value="{{$data['index']}}">{{$data['value']}}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <strong>Vị Trí</strong>
                    <select class="form-control" name="location_product">
                        @foreach($dd_locations as $key=>$data) {
                        @if($data['index']===$product->location_id)
                            <option value="{{$data['index']}}" selected>{{$data['value']}}</option>
                        @else
                            <option value="{{$data['index']}}">{{$data['value']}}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <strong>Giá: </strong>
                            {!! Form::text('price',null, array('placeholder' => 'Tên','class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <strong>ĐVT: </strong>
                            <select class="form-control" name="unit">
                                @foreach($dd_units as $key=>$data) {
                                @if($data['index']===$product->unit_id)
                                    <option value="{{$data['index']}}" selected>{{$data['value']}}</option>
                                @else
                                    <option value="{{$data['index']}}">{{$data['value']}}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <strong>Diện Tích: </strong>
                            {!! Form::text('area',null, array('placeholder' => 'Tên','class' => 'form-control')) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 p-0">
            <strong>Mô Tả Bất Động Sản:</strong>
            {!! Form::textarea('content',null,array('placeholder' => '','id'=>'content-page','class' => 'form-control','rows'=>'10','style'=>'resize:none')) !!}
        </div>
        <div class="col-md-12 p-0">
            <strong>Vị Trí:</strong>
            {!! Form::textarea('p_position',null,array('placeholder' => '','id'=>'content-position','class' => 'form-control','rows'=>'10','style'=>'resize:none')) !!}
        </div>
        <div class="col-md-12 p-0">
            <strong>Tiện Ích:</strong>
            {!! Form::textarea('p_utility',null,array('placeholder' => '','id'=>'content-utility','class' => 'form-control','rows'=>'10','style'=>'resize:none')) !!}
        </div>
        <div class="col-md-12 p-0">
            <strong>Thiết Kế:</strong>
            {!! Form::textarea('p_design',null,array('placeholder' => '','id'=>'content-design','class' => 'form-control','rows'=>'10','style'=>'resize:none')) !!}
        </div>
        <div class="col-md-12 p-0">
            <strong>Mặt Bằng:</strong>
            {!! Form::textarea('p_ground',null,array('placeholder' => '','id'=>'content-ground','class' => 'form-control','rows'=>'10','style'=>'resize:none')) !!}
        </div>
        <hr>

        <div class="col-md-12 p-0">
            <div class="row no-gutters">
                <h3>SEO</h3>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Tiêu Đề (title):</strong>
                        {!! Form::text('seo_title',null, array('placeholder' => 'Tên','class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Mô Tả (description):</strong>
                        {!! Form::textarea('seo_description',null,array('placeholder' => '','id'=>'seo-description','class' => 'form-control','rows'=>'10','style'=>'resize:none')) !!}
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Keywords (cách nhau dấu phẩy ','):</strong>
                        {!! Form::text('seo_keywords',null, array('placeholder' => 'keywords cách nhau dấu phẩy','class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="form-group">
                    <strong>Kích Hoạt:</strong>
                    <input {{$product->isActive==1?'checked':''}}  name="is_active" data-on="Có"
                           data-off="Không"
                           type="checkbox" data-toggle="toggle">
                </div>
            </div>
        </div>

        <div class="col-md-12" style="text-align:  center;">
            <button id="btnDanhMuc" type="submit" class="btn btn-primary">Cập Nhật Sản Phẩm</button>
        </div>
    {!! Form::close() !!}
@stop