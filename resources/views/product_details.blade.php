<style>
      .product_listing_tabs{
          padding-left:0px;
          margin-bottom:0px;
      }

      .product_listing_tabs li:first-child{
          margin-top:0px;
      }
      .product_listing_tabs li{
          margin-top:10px;
          cursor:pointer;
          transition"0.3s
      }

      .product_listing_tabs li:hover .image_box{
          box-shadow:0px 0px 4px gray;
      }

      .active_box{
          box-shadow:0px 0px 4px gray;
      }

      .image_box{
          width: 50px;
          height: 50px;
          border: 2px solid #c4c4c4;
          border-radius: 4px;
          padding: 2px;
          background: #d3d3d347;
          display: flex;
          align-items: center;
          justify-content: center;
      }

        .image_box img{
          width: 100%;
          height: 100%;
          object-fit: cover;
        }

        .relative{
            position:relative;
        }

        .align_center_align{
            display:flex;
            justify-content:center;
        }

        .full_product_image_box{
          width: 100%;
          height: 230px;
          background: #d3d3d34a;
          border: 4px solid lightblue;
          border-radius: 4px;
        }

        .full_product_image_box img{
              width: 100%;
              height: 100%;
              object-fit: cover;
        }

        .fixed_height{
            /*height:600px;*/
        }

        .product_title{
          background: #5ab4c8;
          padding: 10px;
          text-align: center;
          color: white;
          margin-bottom: 30px;
          border-radius: 4px;
          box-shadow: 0px 7px 6px #d2d2d2c9;
          font-weight: 600;
          font-size: 18px;
          letter-spacing: 1.1px;
        }

        .short_description{
              font-size: 14px;
              text-align: justify;
              height: 240px;
              overflow-y: scroll;
              padding: 0px 10px;
        }
        .long_description{
              font-size: 14px;
              text-align: justify;
        }

        .full_description{
            margin-top: 30px;
            padding:0px 20px;
            height:200px;
            overflow-y:scroll;
        }

        .mob_view_div{
            display:none;
        }
        .pc_view_div{
            display:block;
        }

        @media only screen and (max-width: 450px) {
            .product_title {padding: 4px;font-size: 13px;}

            .product_listing_tabs {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 20px;
  }
  .product_listing_tabs li {
    margin-left: 10px;
    margin-top: 0px;

  }

            .product_listing_tabs li:first-child {
    margin-top: 0px;
    margin-left: 0px;
  }

           .full_description {
              padding: 0px 10px;
            }

          .long_description{
              text-align: left;
          }

          .short_description {
    font-size: 13px;
    text-align: justify;
    height: 165px;
          }


        .mob_view_div{
            display:block;
        }

        .full_product_image_box{
            height:150px;
        }

        .pc_view_div{
            display:none;
        }
  }
</style>
@php
$category_name = getCategoryName($product->category_id);
@endphp

<div class="row">
  <div class="col-md-12">
    <p class="product_title">
      {{ $product->name ?? '' }}
    </p>
  </div>

  <hr />

  <div class="col-md-6">
    <div class="row">
      <div class="col-md-3 col-12 align_center_align">
        <ul class="product_listing_tabs">
          <li>
            <div class="image_box active_box">
              <img
                src="{{ env('IMAGE_SHOW_PATH').'products/'.$category_name->name.'/'.$product->image }}"
              />
            </div>
          </li>
          @if(!empty($product_details))
            @foreach($product_details as $item)
              <li>
                <div class="image_box">
                  <img src="{{ env('IMAGE_SHOW_PATH').'products/'.$category_name->name.'/'.$item->documents }}" />
                </div>
              </li>
            @endforeach
          @endif
        </ul>
      </div>

      <div class="col-md-9 col-6 relative pc_view_div">
        <div class="full_product_image_box">
          <img class="img_main" src="{{ env('IMAGE_SHOW_PATH').'products/'.$category_name->name.'/'.$product->image }}" />
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-9 col-5 relative mob_view_div">
    <div class="full_product_image_box">
      <img class="img_main" src="{{ env('IMAGE_SHOW_PATH').'products/'.$category_name->name.'/'.$product->image }}"/>
    </div>
  </div>

  <div class="col-md-6 col-7">
    <p class="short_description">{{ $product->short_description ?? '' }}</p>
  </div>

  <hr />

  <div class="col-md-12">
    <div class="full_description">
      <p class="long_description">{!! $product->long_description ?? '' !!}</p>
    </div>
  </div>
</div>
