@extends('frontend.layouts.app')

@section('content')


<div class="inner-head overlap">
            <div style="background: url('frontend/img/parallax1.jpg') repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible"></div><!-- PARALLAX BACKGROUND IMAGE -->	
            <div class="container">
                <div class="inner-content">
                    <span><i class="ti ti-home"></i></span>
                    <h2>VEHICULS - LSIT </h2>
                    <ul>
                        <li><a href="{{ url('/')}}" title="">HOME</a></li>
                        <li><a href="{{ url('vehicle')}}" title="">VEHICULS - LSIT </a></li>
                    </ul>
                </div>
            </div>
        </div><!-- inner Head -->

        <section class="block">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">	
                        <div class="row">
                            <div class="col-md-8 column">                               
                                <div class="vehiculs-sec">
                                    <div class="vehiculs-list">
                                        <div class="filter-wrapper">    
                                            <ol class="list-option-filter">
                                                <li>
                                                    <div class="option-filter-box">                                                  
                                                        <div class="label-select"> 
                                                            <select class="form-control" name="s_statu">
                                                                <option>Any Status </option>
                                                                <option value="damaged">Damaged</option>
                                                                <option value="new">New</option>
                                                                <option value="semi-new">Semi-New</option>
                                                                <option value="used">Used</option>                                                        
                                                            </select>
                                                        </div>
                                                    </div>
                                                </li>
                                                <!-- select how many post you want to see perpage -->
                                                <li>
                                                    <div class="option-filter-box">            
                                                        <div class="label-select"> 
                                                            <select class="form-control">
                                                                <option value="">
                                                                    vehicul/page 
                                                                </option>
                                                                <option value="4">
                                                                    4 vehiculs-/Page 
                                                                </option>
                                                                <option value="8">
                                                                    8 vehiculs-/Page                    
                                                                </option>
                                                                <option value="12">
                                                                    12 vehiculs-/Page                    
                                                                </option>
                                                            </select>    
                                                        </div>
                                                    </div>
                                                </li>
                                                <!--// select how many post you want to see perpage -->
                                                <li class="sort-rates-lastest">
                                                    <div class="option-filter-box">
                                                        <span class="title">SORT BY:</span>
                                                        <a href="" class="sort-icon orderby" data-order="" data-sort="rating_score">
                                                            Rating                </a> / 
                                                        <a href="" class="sort-icon orderby active" data-order="" data-sort="date">
                                                            Latest                </a>
                                                    </div>
                                                </li>
                                                <li class="icon-list-view">
                                                    <div class="option-filter-box">
                                                        <span class="icon-view grid-style active"><i class="fa fa-th"></i></span>
                                                        <span class="icon-view fullwidth-style"><i class="fa fa-th-list"></i></span>
                                                    </div>
                                                </li>
                                            </ol>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="vehiculs-content vehiculs-grid">
                                                <!-- vehicul Box -->
         
                                            @foreach(App\car::where('status',1)->get() as $car)
                                            <div class="vehicul-grid ">                                                        
                                                <div class="to-thumb col-sm-4 p0">
                                                    <img src="{{ url($car->car_image) }}" alt="">      
                                                    <!-- <span class="spn-status"> Damaged </span> -->
                                                    <span class="spn-save"> <i class="ti ti-heart"></i> </span>
                                                    <div class="user-preview">
                                                        <a class="col" href="agent.html">
                                                            <img alt="Camilė" class="avatar avatar-small" src="{{ url('frontend/img/4.png') }}" title="Camilė">
                                                        </a> 
                                                    </div>
                                                    <a class="proeprty-sh-more-list" href="vehicul.html"><i class="fa fa-angle-double-right"> </i></a>

                                                </div>
                                                <div class="to-details col-sm-8 p0">
                                                    <div class="vehicul-top-cnt">
                                                        <h3><a href="vehicul.html" title="">{{$car->car_name}}</a></h3>
                                                        <span class="price">{{$car->cost_per_kilometer}}</span>
                                                        <p>{{$car->content}}</p>
                                                    </div>
                                                    <div class="vehicul-bottom-cnt">
                                                    </div>
                                                </div>
                                            </div><!-- vehicul Box -->
                                            @endforeach
                                            <ul class="pagination">
                                                <li class="disabled"><a href="#" title=""><span>NEXT</span></a></li>
                                                <li><a href="#" title="">1</a></li>
                                                <li class="active"><a href="#" title="">2</a></li>
                                                <li><a href="#" title="">3</a></li>
                                                <li><a href="#" title=""><span>PREV</span></a></li>
                                            </ul>
                                            <div class="col-md-12">
                                                {!! $car->render !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <aside class="col-md-4 column">
                                <div class="search_widget widget">
                                    <div class="heading2">
                                        <h3>Search vehiculs</h3>
                                    </div>
                                    <div class="search-form"> 
                                        <form action="vehiculs.html"  method="get" class="form-inline">   
                                            <div class="search-form-content">
                                                <div class="search-form-field">  
                                                    <div class="form-group col-md-12">
                                                        <div class="label-select">
                                                            <select class="form-control" name="s_location">
                                                                <option>Any Manufacturer</option>
                                                                <option>Audi</option>
                                                                <option>Mercedes-Benz</option>
                                                                <option>BMW</option>
                                                                <option>Lexus</option>
                                                                <option>Lincoln</option>
                                                                <option>Ford</option>
                                                                <option>Fiat</option>
                                                                <option>Dodge</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group col-md-12">
                                                        <div class="label-select">  
                                                            <select class="form-control" name="anymodule">
                                                                <option>Any Model </option>
                                                                <option value="1">R8</option>
                                                                <option value="2">S500</option>
                                                                <option value="3">540i</option>
                                                                <option value="4">RX300</option>
                                                                <option value="5">Navigator</option>
                                                                <option value="6">Taurus</option>
                                                                <option value="7">Doblo</option>
                                                                <option value="8">Viper</option>
                                                            </select>
                                                        </div>
                                                    </div>  

                                                    <div class="form-group col-md-12">
                                                        <div class="label-select">
                                                            <select class="form-control" name="s_location"> 
                                                                <option>Any locations</option>
                                                                <option>Central New York</option>
                                                                <option>GreenVille</option>
                                                                <option>Long Island</option>
                                                                <option>New York City</option>
                                                                <option>West Side</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group col-md-12">
                                                        <div class="label-select"> 
                                                            <select class="form-control" name="s_statu">
                                                                <option>Any Status </option>
                                                                <option value="damaged">Damaged</option>
                                                                <option value="new">New</option>
                                                                <option value="semi-new">Semi-New</option>
                                                                <option value="used">Used</option>
                                                            </select>
                                                        </div>
                                                    </div> 

                                                    <div class="form-group col-md-12">
                                                        <span class="gprice-label">Price Range</span>
                                                        <input type="text" class="span2" value="" data-slider-min="0" 
                                                               data-slider-max="60000" data-slider-step="5" 
                                                               data-slider-value="[0,60000]" id="price-range" >
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <span class="garea-label">Mileage Range</span> 
                                                        <input type="text" class="span2" value="" data-slider-min="0" 
                                                               data-slider-max="60000" data-slider-step="5" 
                                                               data-slider-value="[50,60000]" id="vehicul-geo" >
                                                    </div>                                            
                                                </div> 
                                            </div>
                                            <div class="search-form-submit">
                                                <button type="submit" class="btn-search">Search</button>
                                            </div>
                                        </form>
                                    </div><!-- Services Sec -->
                                </div><!-- Category Widget -->
                            </aside>
                        </div>

                    </div>
                </div>
            </div>
        </section>



@stop