@extends('layout.layout')

@section('cssLink')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
    <div id="carouselExampleControls" class="position-relative carousel slide" data-bs-ride="carousel">


        <div class="carousel-inner">
            <div class="carousel-item active ">
                <img src="./imgs/ome3.jpg" class="w-100" alt="...">
                <div class="carousel-caption ">
                    <div class="position-absolute slideText">
                        <h4 class="text_title_">Do you want the best shoes in the world ? </h4>
                        <h4 class="text_title2">COME WITH TEV </h4>
                        <button class="btn_order">
                            Order now
                        </button>
                    </div>
                </div>


            </div>
            <div class="carousel-item">
                <img src="./imgs/ome4.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <div class="position-absolute slideText">
                        <h4 class="text_title_">Do want the best shoes in the world ? </h4>
                        <h4 class="text_title2">WOMEN SHOES'S</h4>
                        <button class="btn_order">
                            Order now
                        </button>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./imgs/ome5.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption ">
                    <div class="position-absolute slideText">
                        <h4 class="text_title_">Do want the best shoes in the world ? </h4>
                        <h4 class="text_title2">MAN SHOES</h4>
                        <button class="btn_order">
                            Visit my website
                        </button>
                    </div>
                </div>
            </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Shopping  -->
    <div class="section mx-40">

        <h2 class="section-header">DANH SÁCH CÁC MÓN </h2>

        <div class="grid-product">
            <div class="products_item">
                <span class="products_item_tag"> New </span>
                <a href="" class="item">
                    <img src="./imgs/shoes.png 
                " alt="" class="img-product">
                </a>
                <div class="grid-product__link">
                    <div class="grid-product_title text_decrib ">MAYA PATENT BALLERINA - ICE BLUE</div>
                    <label class="grid-product_price_child"> €129.95</label>
                    <ul class="shoe-sizes">
                        <li>US 6</li>
                        <li>US 7</li>
                        <li>US 8</li>
                        <li>US 9</li>
                    </ul>

                </div>

            </div>
            <div class="products_item">
                <span class="products_item_tag"> New </span>
                <a href="" class="item">
                    <img src="./imgs/shoes.png 
                " alt="" class="img-product">
                </a>
                <div class="grid-product__link">
                    <div class="grid-product_title text_decrib ">MAYA PATENT BALLERINA - ICE BLUE</div>
                    <label class="grid-product_price_child"> €129.95</label>
                    <ul class="shoe-sizes">
                        <li>US 6</li>
                        <li>US 7</li>
                        <li>US 8</li>
                        <li>US 9</li>
                    </ul>

                </div>

            </div>
            <div class="products_item">
                <span class="products_item_tag"> New </span>
                <a href="" class="item">
                    <img src="./imgs/22.png 
                " alt="" class="img-product">
                </a>
                <div class="grid-product__link">
                    <div class="grid-product_title text_decrib ">MAYA PATENT BALLERINA - ICE BLUE</div>
                    <label class="grid-product_price_child"> €129.95</label>
                    <ul class="shoe-sizes">
                        <li>US 6</li>
                        <li>US 7</li>
                        <li>US 8</li>
                        <li>US 9</li>
                    </ul>

                </div>

            </div>
            <div class="products_item">
                <span class="products_item_tag"> New </span>
                <a href="" class="item">
                    <img src="./imgs/3.png 
                " alt="" class="img-product">
                </a>
                <div class="grid-product__link">
                    <div class="grid-product_title text_decrib ">MAYA PATENT BALLERINA - ICE BLUE</div>
                    <label class="grid-product_price_child"> €129.95</label>
                    <ul class="shoe-sizes">
                        <li>US 6</li>
                        <li>US 7</li>
                        <li>US 8</li>
                        <li>US 9</li>
                    </ul>

                </div>

            </div>
            <div class="products_item">
                <span class="products_item_tag"> New </span>
                <a href="" class="item">
                    <img src="./imgs/44.png 
                " alt="" class="img-product">
                </a>
                <div class="grid-product__link">
                    <div class="grid-product_title text_decrib ">MAYA BALLERINA - ICE BLUE</div>
                    <label class="grid-product_price_child"> €129.95</label>
                    <ul class="shoe-sizes">
                        <li>US 6</li>
                        <li>US 7</li>
                        <li>US 8</li>
                        <li>US 9</li>
                    </ul>

                </div>

            </div>

        </div>
    </div>

    <div class="seaction_noiti mx-40">
        <h2 class="section-header">THEO DÕI CHÚNG TÔI ĐỂ NHẬN ƯU ĐÃI</h2>
        <div class="grid-noitce flex inline-flex ">
            <div class="noitce position-relative">
                <div class="noitce_Sale1 width-100">
                    <img class="noitce_Sale12 width-100" src="imgs/o.jpg" alt="">
                </div>
                <i class="fa fa-instagram instagram-icon" style="font-size:24px"></i>

            </div>
            <div class="noitce position-relative">
                <div class="noitce_Sale1  width-100">
                    <img class="noitce_Sale12 width-100" src="imgs/tr.jpg" alt="">
                </div>
                <i class="fa fa-instagram instagram-icon" style="font-size:24px"></i>

            </div>
            <div class="noitce position-relative">
                <div class="noitce_Sale1  width-100">
                    <img class="noitce_Sale12 width-100" src="imgs/t.jpg" alt="">
                </div>
                <i class="fa fa-instagram instagram-icon" style="font-size:24px"></i>

            </div>
        </div>
    </div>

    <div class="section_typeShoes">

        <div class="grid-typeShoes">
            <div class="typeShoes position-relative">
                <div class="typeShoes_item position-relative">
                    <img class="typeShoes_Title_img" src="./imgs/shoes1 (1).jpg" alt="">
                    <div class="typeShoes_Title">SHOP SNEAKER</div>
                </div>
            </div>
            <div class="typeShoes position-relative">
                <div class="typeShoes_item position-relative">
                    <img class="typeShoes_Title_img" src="./imgs/shoes1 (2).jpg" alt="">
                    <div class="typeShoes_Title">SHOP BOOTS</div>
                </div>
            </div>
            <div class="typeShoes position-relative">
                <div class="typeShoes_item position-relative">
                    <img class="typeShoes_Title_img" src="./imgs/shoes1 (3).jpg" alt="">
                    <div class="typeShoes_Title">SHOP CROCS</div>

                </div>
            </div>
            <div class="typeShoes position-relative">
                <div class="typeShoes_item position-relative">
                    <img class="typeShoes_Title_img" src="./imgs/shoes1 (4).jpg" alt="">
                    <div class="typeShoes_Title">SHOP SLIDE</div>
                </div>
            </div>
        </div>
    </div>
    <div class="section_typeShoes">

        <div class="grid-typeShoes">
            <div class="typeShoes position-relative">
                <div class="typeShoes_item position-relative">
                    <img class="typeShoes_Title_img" src="./imgs/shoes1 (2).jpg" alt="">
                    <div class="typeShoes_Title">SHOP DENIM</div>
                </div>
            </div>
            <div class="typeShoes position-relative">
                <div class="typeShoes_item position-relative">
                    <img class="typeShoes_Title_img" src="./imgs/shoes1 (1).jpg" alt="">
                    <div class="typeShoes_Title">SHOP LOAFER</div>
                </div>
            </div>
            <div class="typeShoes position-relative">
                <div class="typeShoes_item position-relative">
                    <img class="typeShoes_Title_img" src="./imgs/shoes1 (4).jpg" alt="">
                    <div class="typeShoes_Title">SHOP CHELSEA</div>
                </div>
            </div>
            <div class="typeShoes position-relative">
                <div class="typeShoes_item position-relative">
                    <img class="typeShoes_Title_img" src="./imgs/shoes1 (3).jpg" alt="">
                    <div class="typeShoes_Title">SHOP DERBY</div>
                </div>
            </div>
        </div>
    </div>


    <!-- section_NEW ARRIVE -->

    <div class="section_typeShoes">

        <div class="grid-arrvial">
            <div class="typeShoes position-relative">
                <div class="arrvial_item position-relative">
                    <img class="typeShoes_Title_img" src="./imgs/shoes1 (2).jpg" alt="">
                    <div class="arrive_Titile flex  ">
                        <span class="arrive_title_child">HEELS</span>
                        <button class="btnMore">SEE MORE</button>
                    </div>

                </div>
            </div>
            <div class="typeShoes position-relative">
                <div class="arrvial_item position-relative">
                    <img class="typeShoes_Title_img" src="./imgs/shoes1 (1).jpg" alt="">
                    <div class="arrive_Titile">
                        <span class="arrive_title_child">NEW ARRIVE</span>
                        <button class="btnMore">SEE MORE</button>
                    </div>
                </div>
            </div>
            <div class="typeShoes position-relative">
                <div class="arrvial_item position-relative">
                    <img class="typeShoes_Title_img" src="./imgs/shoes1 (4).jpg" alt="">
                    <div class="arrive_Titile">
                        <span class="arrive_title_child">MENS SHOES</span>
                        <button class="btnMore">SEE MORE</button>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="section_highlight position-relative">
        <div class="img_highlight position-absolute ">
            <div class="img_all position-relative">
                <img class="img_under" src="./imgs/adrian.jpg" alt="">
                <img class="img_above" src="./imgs/adrian2.jpg" alt="">
            </div>
            <div class="text_hightlight">
                <div class="text_1">EDGE FOR EVERYDAY AND PARTY</div>
                <div class="text_2">HIGHLIGHT</div>
                <div class="text_3">Vega Bootie Suede</div>
                <button class="btnMore">SEE MORE</button>
            </div>
            <div class="text_intro">
                <h2 class="text_11">WELCOME TO THE SHOE THE BEAR UNIVERSE</h2>
                <h2 class="text_22">We design footwear for modern people, with a focus on design and quality. Using
                    traditional Danish design principles, meticulous attention to detail and enhanced functionality, we
                    create timeless products that can be worn season after season. As proud members of the Leather
                    Working Group, we enforce our best practices in responsible sourcing and production of our products.
                    Our exploration of color, shape and texture is enhanced by our creative use of components, leather
                    and textiles. We strive to continuously improve and develop our collections with a focus on
                    responsibility, functionality and modernity.</h2>
                <div class="text_33">Modern footwear from Denmark made responsibly</div>

            </div>
        </div>
    </div>
@endsection
