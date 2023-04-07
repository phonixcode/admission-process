@extends('layouts.front')

@section('content')

    @include('frontend.partials._navbar')

    <!-- Inner Page Breadcrumb -->
    <section class="inner_page_breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 text-center">
                    <div class="breadcrumb_content">
                        <h4 class="breadcrumb_title">Schools</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Schools</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Courses List -->
    <section class="features-course pb20">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="main-title text-center">
                        <h3 class="mb0 mt0">Featured Schools</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shop_product_slider">
                        <div class="item">
                            <div class="top_courses">
                                <div class="thumb">
                                    <img class="img-whp" src="front/images/courses/t1.jpg" alt="t1.jpg">
                                    <div class="overlay">
                                        <div class="tag">Top School</div>
                                        <div class="icon"><span class="flaticon-like"></span></div>
                                        <a class="tc_preview_course" href="schools-single.html">Find Out More</a>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="tc_content">
                                        <p>Malta</p>
                                        <h5>STC Higher Education</h5>
                                        <ul class="tc_review">
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li class="list-inline-item"><a href="#">(6)</a></li>
                                        </ul>
                                    </div>
                                    <div class="tc_footer">
                                        <ul class="tc_meta float-left">
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="flaticon-profile"></i></a></li>
                                            <li class="list-inline-item"><a href="#">200</a></li>
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="flaticon-comment"></i></a></li>
                                            <li class="list-inline-item"><a href="#">25</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="top_courses">
                                <div class="thumb">
                                    <img class="img-whp" src="front/images/courses/t2.jpg" alt="t2.jpg">
                                    <div class="overlay">
                                        <div class="tag">Top School</div>
                                        <div class="icon"><span class="flaticon-like"></span></div>
                                        <a class="tc_preview_course" href="#">Find Out More</a>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="tc_content">
                                        <p>Malta</p>
                                        <h5>University Of Malta (UOM)</h5>
                                        <ul class="tc_review">
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li class="list-inline-item"><a href="#">(6)</a></li>
                                        </ul>
                                    </div>
                                    <div class="tc_footer">
                                        <ul class="tc_meta float-left">
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="flaticon-profile"></i></a></li>
                                            <li class="list-inline-item"><a href="#">200</a></li>
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="flaticon-comment"></i></a></li>
                                            <li class="list-inline-item"><a href="#">25</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="top_courses">
                                <div class="thumb">
                                    <img class="img-whp" src="front/images/courses/t3.jpg" alt="t3.jpg">
                                    <div class="overlay">
                                        <div class="tag">Top School</div>
                                        <div class="icon"><span class="flaticon-like"></span></div>
                                        <a class="tc_preview_course" href="#">Find out More</a>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="tc_content">
                                        <p>London</p>
                                        <h5>Middlesex University</h5>
                                        <ul class="tc_review">
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li class="list-inline-item"><a href="#">(6)</a></li>
                                        </ul>
                                    </div>
                                    <div class="tc_footer">
                                        <ul class="tc_meta float-left">
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="flaticon-profile"></i></a></li>
                                            <li class="list-inline-item"><a href="#">200</a></li>
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="flaticon-comment"></i></a></li>
                                            <li class="list-inline-item"><a href="#">25</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="top_courses">
                                <div class="thumb">
                                    <img class="img-whp" src="front/images/courses/t4.jpg" alt="t4.jpg">
                                    <div class="overlay">
                                        <div class="tag">Top Choice</div>
                                        <div class="icon"><span class="flaticon-like"></span></div>
                                        <a class="tc_preview_course" href="#">FInd out More</a>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="tc_content">
                                        <p>London</p>
                                        <h5>University Of Wolverhampton</h5>
                                        <ul class="tc_review">
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a>
                                            </li>
                                            <li class="list-inline-item"><a href="#">(6)</a></li>
                                        </ul>
                                    </div>
                                    <div class="tc_footer">
                                        <ul class="tc_meta float-left">
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="flaticon-profile"></i></a></li>
                                            <li class="list-inline-item"><a href="#">200</a></li>
                                            <li class="list-inline-item"><a href="#"><i
                                                        class="flaticon-comment"></i></a></li>
                                            <li class="list-inline-item"><a href="#">25</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Courses List -->
    <section class="courses-list pb40">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8 col-xl-9 shadow_box">
                    <div class="row courses_list_heading">
                        <div class="col-xl-4 p0">
                            <div class="instructor_search_result style2">
                                <p class="mt10 fz15"><span class="color-dark pr10">10 </span> results <span
                                        class="color-dark pr10">100</span> Schools</p>
                            </div>
                        </div>
                        <div class="col-xl-8 p0">
                            <div class="candidate_revew_select style2 text-right">
                                <ul class="mb0">
                                    <li class="list-inline-item">
                                        <select class="selectpicker show-tick">
                                            <option>Newly published</option>
                                            <option>Recent</option>
                                            <option>Old Review</option>
                                        </select>
                                    </li>
                                    <li class="list-inline-item">
                                        <div class="candidate_revew_search_box course fn-520">
                                            <form class="form-inline my-2 my-lg-0">
                                                <input class="form-control mr-sm-2" type="search"
                                                    placeholder="Search Schools" aria-label="Search">
                                                <button class="btn my-2 my-sm-0" type="submit"><span
                                                        class="flaticon-magnifying-glass"></span></button>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row courses_container">
                        <div class="col-lg-12 p0">
                            <div class="courses_list_content">
                                <div class="top_courses list">
                                    <div class="thumb">
                                        <img class="img-whp" src="front/images/courses/t1.jpg" alt="t1.jpg">
                                        <div class="overlay">
                                            <div class="icon"><span class="flaticon-like"></span></div>
                                            <a class="tc_preview_course" href="schools-single.html">Read More</a>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <div class="tc_content">
                                            <p>Malta</p>
                                            <h5>STC Higher Education <span class="tag">Best School</span></h5>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime
                                                mollitia,molestiae quas vel sint commodi repudiandae consequuntur
                                                voluptatum…</p>
                                        </div>
                                        <div class="tc_footer">
                                            <ul class="tc_meta float-left fn-414">
                                                <li class="list-inline-item"><a href="#"><i
                                                            class="flaticon-profile"></i></a></li>
                                                <li class="list-inline-item"><a href="#">200</a></li>
                                                <li class="list-inline-item"><a href="#"><i
                                                            class="flaticon-comment"></i></a></li>
                                                <li class="list-inline-item"><a href="#">25</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 p0">
                            <div class="courses_list_content">
                                <div class="top_courses list">
                                    <div class="thumb">
                                        <img class="img-whp" src="front/images/courses/t2.jpg" alt="t2.jpg">
                                        <div class="overlay">
                                            <div class="icon"><span class="flaticon-like"></span></div>
                                            <a class="tc_preview_course" href="#">Read More</a>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <div class="tc_content">
                                            <p>Malta</p>
                                            <h5>American University Malta</h5>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime
                                                mollitia,molestiae quas vel sint commodi repudiandae consequuntur
                                                voluptatum…</p>
                                        </div>
                                        <div class="tc_footer">
                                            <ul class="tc_meta float-left fn-414">
                                                <li class="list-inline-item"><a href="#"><i
                                                            class="flaticon-profile"></i></a></li>
                                                <li class="list-inline-item"><a href="#">200</a></li>
                                                <li class="list-inline-item"><a href="#"><i
                                                            class="flaticon-comment"></i></a></li>
                                                <li class="list-inline-item"><a href="#">25</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 p0">
                            <div class="courses_list_content">
                                <div class="top_courses list">
                                    <div class="thumb">
                                        <img class="img-whp" src="front/images/courses/t3.jpg" alt="t3.jpg">
                                        <div class="overlay">
                                            <div class="icon"><span class="flaticon-like"></span></div>
                                            <a class="tc_preview_course" href="#">Read More</a>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <div class="tc_content">
                                            <p>Malta</p>
                                            <h5>GBSB Global Business School</h5>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime
                                                mollitia,molestiae quas vel sint commodi repudiandae consequuntur
                                                voluptatum…</p>
                                        </div>
                                        <div class="tc_footer">
                                            <ul class="tc_meta float-left fn-414">
                                                <li class="list-inline-item"><a href="#"><i
                                                            class="flaticon-profile"></i></a></li>
                                                <li class="list-inline-item"><a href="#">200</a></li>
                                                <li class="list-inline-item"><a href="#"><i
                                                            class="flaticon-comment"></i></a></li>
                                                <li class="list-inline-item"><a href="#">25</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 p0">
                            <div class="courses_list_content">
                                <div class="top_courses list">
                                    <div class="thumb">
                                        <img class="img-whp" src="front/images/courses/t4.jpg" alt="t4.jpg">
                                        <div class="overlay">
                                            <div class="icon"><span class="flaticon-like"></span></div>
                                            <a class="tc_preview_course" href="#">Read More</a>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <div class="tc_content">
                                            <p>Malta</p>
                                            <h5>Institute of Tourism Studies</h5>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime
                                                mollitia,molestiae quas vel sint commodi repudiandae consequuntur
                                                voluptatum…</p>
                                        </div>
                                        <div class="tc_footer">
                                            <ul class="tc_meta float-left fn-414">
                                                <li class="list-inline-item"><a href="#"><i
                                                            class="flaticon-profile"></i></a></li>
                                                <li class="list-inline-item"><a href="#">1548</a></li>
                                                <li class="list-inline-item"><a href="#"><i
                                                            class="flaticon-comment"></i></a></li>
                                                <li class="list-inline-item"><a href="#">25</a></li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 p0">
                            <div class="courses_list_content">
                                <div class="top_courses list">
                                    <div class="thumb">
                                        <img class="img-whp" src="front/images/courses/t5.jpg" alt="t5.jpg">
                                        <div class="overlay">
                                            <div class="icon"><span class="flaticon-like"></span></div>
                                            <a class="tc_preview_course" href="#">Read More</a>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <div class="tc_content">
                                            <p>Malta</p>
                                            <h5>Malta college of arts, science and technology</h5>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime
                                                mollitia,molestiae quas vel sint commodi repudiandae consequuntur
                                                voluptatum…</p>
                                        </div>
                                        <div class="tc_footer">
                                            <ul class="tc_meta float-left fn-414">
                                                <li class="list-inline-item"><a href="#"><i
                                                            class="flaticon-profile"></i></a></li>
                                                <li class="list-inline-item"><a href="#">200</a></li>
                                                <li class="list-inline-item"><a href="#"><i
                                                            class="flaticon-comment"></i></a></li>
                                                <li class="list-inline-item"><a href="#">25</a></li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 p0">
                            <div class="courses_list_content">
                                <div class="top_courses list">
                                    <div class="thumb">
                                        <img class="img-whp" src="front/images/courses/t6.jpg" alt="t6.jpg">
                                        <div class="overlay">
                                            <div class="icon"><span class="flaticon-like"></span></div>
                                            <a class="tc_preview_course" href="#">Read More</a>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <div class="tc_content">
                                            <p>Malta</p>
                                            <h5>London School Of Commerce</h5>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime
                                                mollitia,molestiae quas vel sint commodi repudiandae consequuntur
                                                voluptatum…</p>
                                        </div>
                                        <div class="tc_footer">
                                            <ul class="tc_meta float-left fn-414">
                                                <li class="list-inline-item"><a href="#"><i
                                                            class="flaticon-profile"></i></a></li>
                                                <li class="list-inline-item"><a href="#">200</a></li>
                                                <li class="list-inline-item"><a href="#"><i
                                                            class="flaticon-comment"></i></a></li>
                                                <li class="list-inline-item"><a href="#">25</a></li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 p0">
                            <div class="courses_list_content">
                                <div class="top_courses list">
                                    <div class="thumb">
                                        <img class="img-whp" src="front/images/courses/t7.jpg" alt="t7.jpg">
                                        <div class="overlay">
                                            <div class="icon"><span class="flaticon-like"></span></div>
                                            <a class="tc_preview_course" href="#">Read More</a>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <div class="tc_content">
                                            <p>Malta</p>
                                            <h5>Malta Institute of Accountants</h5>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime
                                                mollitia,molestiae quas vel sint commodi repudiandae consequuntur
                                                voluptatum…</p>
                                        </div>
                                        <div class="tc_footer">
                                            <ul class="tc_meta float-left fn-414">
                                                <li class="list-inline-item"><a href="#"><i
                                                            class="flaticon-profile"></i></a></li>
                                                <li class="list-inline-item"><a href="#">200</a></li>
                                                <li class="list-inline-item"><a href="#"><i
                                                            class="flaticon-comment"></i></a></li>
                                                <li class="list-inline-item"><a href="#">25</a></li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mt30 mb30">
                            <div class="mbp_pagination">
                                <ul class="page_navigation">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true"> <span
                                                class="flaticon-left-arrow"></span> Prev</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item active" aria-current="page">
                                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">...</a></li>
                                    <li class="page-item"><a class="page-link" href="#">14</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next <span
                                                class="flaticon-right-arrow-1"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3">
                    <div class="selected_filter_widget style3 mb30">
                        <div id="accordion" class="panel-group">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#panelBodySoftware" class="accordion-toggle link fz20 mb15"
                                            data-toggle="collapse" data-parent="#accordion">Locations</a>
                                    </h4>
                                </div>
                                <div id="panelBodySoftware" class="panel-collapse collapse show">
                                    <div class="panel-body">
                                        <div class="ui_kit_checkbox">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck14">
                                                <label class="custom-control-label" for="customCheck14">Malta <span
                                                        class="float-right">(50)</span></label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck15">
                                                <label class="custom-control-label" for="customCheck15">United Kingdom
                                                    <span class="float-right">(15)</span></label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck16">
                                                <label class="custom-control-label" for="customCheck16">Nigeria <span
                                                        class="float-right">(126)</span></label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck17">
                                                <label class="custom-control-label" for="customCheck17">South Africa<span
                                                        class="float-right">(1,584)</span></label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck18">
                                                <label class="custom-control-label" for="customCheck18">Ghana <span
                                                        class="float-right">(34)</span></label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck19">
                                                <label class="custom-control-label" for="customCheck19">Italy <span
                                                        class="float-right">(34)</span></label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck20">
                                                <label class="custom-control-label" for="customCheck20">France <span
                                                        class="float-right">(06)</span></label>
                                            </div>
                                            <a class="color-orose" href="#"><span class="fa fa-plus pr10"></span>
                                                See More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="selected_filter_widget style3">
                        <div id="accordion" class="panel-group">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#panelBodyRating" class="accordion-toggle link fz20 mb15"
                                            data-toggle="collapse" data-parent="#accordion">Rating</a>
                                    </h4>
                                </div>
                                <div id="panelBodyRating" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="ui_kit_checkbox style2">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck80">
                                                <label class="custom-control-label" for="customCheck80">Show All <span
                                                        class="float-right">(03)</span></label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck82">
                                                <label class="custom-control-label" for="customCheck82">1 star and higher
                                                    <span class="float-right">(15)</span></label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck83">
                                                <label class="custom-control-label" for="customCheck83">2 star and higher
                                                    <span class="float-right">(126)</span></label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck84">
                                                <label class="custom-control-label" for="customCheck84">3 star and higher
                                                    <span class="float-right">(1,584)</span></label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck85">
                                                <label class="custom-control-label" for="customCheck85">4 star and higher
                                                    <span class="float-right">(34)</span></label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck86">
                                                <label class="custom-control-label" for="customCheck86">5 star and higher
                                                    <span class="float-right">(58)</span></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="selected_filter_widget p30 bgc-thm">
                        <span class="float-left"><img class="mr20" src="front/images/cb.png" alt="3.png"
                                style=" width: 50px;"></span>
                        <h4 class="mt15 fz20 fw500 color-white">Not sure?</h4>
                        <br>
                        <p class="color-white" style="color: white;"><a class="color-white" href="login.html">Navigate
                                the admissions process with ease. Click here!</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('frontend.partials._footer')
@endsection
