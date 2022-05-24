@extends('frontend.default.layouts.newApp')
@section('content')
    <main>
        @include('frontend.default.includes.include')

        <section class="wrapper">
            <div class="d_flex from_to">
                <a class="from_this" href="index.html">Home</a>
                <span class="slashes">/</span>
                <span class="this_page">Catalog</span>
            </div>
            <div class="d_flex catalog_section" >
                <div class="all_category">
                    <div class="d_flex all_category_title">
                        <span class="allctgr">All category</span>
                        <span>
                                <svg width="15" height="9" viewBox="0 0 15 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L7.5 7.5L14 1" stroke="#717171" stroke-width="2"/>
                                </svg>
                            </span>
                    </div>
                    <div class="catalog_filter">
                        {{-- @dd($CategoryList) --}}
                        @foreach($CategoryList as $key => $category)
                            {{-- @if (count($category->subCategories) > 0)
                            <li class='sub-menu'><a class="getProductByChoice" data-id="parent_cat"
                                    data-value="{{ $category->id }}">{{$category->name}}<div
                                        class='ti-plus right plus_btn_div'></div></a>
                                @else --}}
                                <a href="#" class="catalog_a d_flex">
                                    {{$category->name}}
                                    <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1L5.96659 5.96652L1 10.9331" stroke="#717171"></path>
                                    </svg>
                                </a>
                            {{-- <li class='sub-menu'><a class="getProductByChoice" data-id="cat"
                                    data-value="{{ $category->id }}">{{$category->name}}<div
                                        class='ti-plus right plus_btn_div'></div></a> --}}
                                {{-- @endif
                                <ul>
                                    @foreach($category->subCategories as $key => $subCategory)
                                    <li>
                                        <a href="#">{{$subCategory->name}}</a>
                                        <label class="cs_checkbox">
                                            <input type="checkbox" class="getProductByChoice attr_checkbox" data-id="cat"
                                                data-value="{{ $subCategory->id }}">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    @endforeach

                                </ul> --}}
                            {{-- </li> --}}
                        @endforeach
                        {{-- <a href="" class="catalog_a d_flex">
                            Bracelets
                            <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L5.96659 5.96652L1 10.9331" stroke="#717171"></path>
                            </svg>
                        </a>
                        <a href="" class="catalog_a d_flex">
                            Broches
                            <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L5.96659 5.96652L1 10.9331" stroke="#717171"></path>
                            </svg>
                        </a>
                        <a href="" class="catalog_a d_flex">
                            Cufflinks
                            <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L5.96659 5.96652L1 10.9331" stroke="#717171"></path>
                            </svg>
                        </a>
                        <a href="" class="catalog_a d_flex">
                            Earrnings
                            <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L5.96659 5.96652L1 10.9331" stroke="#717171"></path>
                            </svg>
                        </a>
                        <a href="" class="catalog_a d_flex">
                            Necklaces
                            <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L5.96659 5.96652L1 10.9331" stroke="#717171"></path>
                            </svg>
                        </a>
                        <a href="" class="catalog_a d_flex">
                            Pendants
                            <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L5.96659 5.96652L1 10.9331" stroke="#717171"></path>
                            </svg>
                        </a>
                        <a href="" class="catalog_a d_flex">
                            Rings
                            <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L5.96659 5.96652L1 10.9331" stroke="#717171"></path>
                            </svg>
                        </a>
                        <a href="" class="catalog_a d_flex">
                            Chains
                            <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L5.96659 5.96652L1 10.9331" stroke="#717171"></path>
                            </svg>
                        </a>
                        <a href="" class="catalog_a d_flex">
                            Other
                            <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L5.96659 5.96652L1 10.9331" stroke="#717171"></path>
                            </svg>
                        </a>
                        <a href="" class="catalog_a d_flex">
                            All designs
                            <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L5.96659 5.96652L1 10.9331" stroke="#717171"></path>
                            </svg>
                        </a> --}}
                    </div>
                </div>
                <div class="d_flex fl_end" id="dataWithPaginate">
                    <div class="sort_by">
                        <div class="sortby_sp d_flex">
                            {{ isset($sort_by) ? isset($sort_by) : '' }}
                            {{-- Sort by --}}
                            <svg width="15" height="9" viewBox="0 0 15 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L7.5 7.5L14 1" stroke="#717171" stroke-width="2"/>
                            </svg>
                        </div>
                        <div class="sorts_drpdwn">
                            <span class="sort_sp getFilterUpdateByIndex">{{ __('common.new') }}</span>
                            <span class="sort_sp getFilterUpdateByIndex">{{ __('common.old') }}</span>
                            <span class="sort_sp getFilterUpdateByIndex">{{ __('defaultTheme.name_a_to_z') }}</span>
                            <span class="sort_sp getFilterUpdateByIndex">{{ __('defaultTheme.name_z_to_a') }}</span>
                            <span class="sort_sp getFilterUpdateByIndex">{{ __('defaultTheme.price_low_to_high') }}</span>
                            <span class="sort_sp getFilterUpdateByIndex">{{ __('defaultTheme.price_high_to_low') }}</span>
                        </div>
                    </div>
                    <div class="categories_block d_flex categories_block_id">
                        @include('frontend.default.includes.categoryInclude')
                    </div>
                </div>
            </div>
        </section>
    </main>

    
@endsection
