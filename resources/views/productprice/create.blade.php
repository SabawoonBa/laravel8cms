@section('title', 'Add Product Price')
@include('main')
@include('components/mainmenu')
@include('components/breadcrumb')
<div class="cat__content">

<!-- START: ecommerce/blogcategory-edit -->
<section class="card">
   <div class="card-header">
        <span class="cat__core__title">
            <strong>Add Product Price</strong>
        </span>
    </div>
    <div class="card-body">
         @if ($message = Session::get('error'))
			<div class="alert alert-danger" role="alert" id="id">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>Oh snap! </strong> {{ $message }}
            </div>
		@endif
		 @if ($message = Session::get('success'))
			<div class="alert alert-success" role="alert" id="id">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>Well done! </strong> {{ $message }} !
            </div>
		@endif
        <div class="row">
			<div class="col-lg-12">
			 {!! Form::open(array('url' => ['/productprice/store/'.$productprice],'method'=>'POST', 'id'=>'form-validation', 'name'=>'form-validation')) !!}
                <input type="hidden" name="product_id" value="{{$productprice}}">
				<div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="validation-pquantity">Quantity <span style="color:red; font-weight:900; font-size:20px;">*</span></label>
                            <input type="text" id="validation-pquantity" name="quantity"  class="form-control"  data-validation="[NOTEMPTY]" data-validation-message="Product Quantity must not be empty!">  
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="validation-pprice">Price <span style="color:red; font-weight:900; font-size:20px;">*</span></label>
                            <input type="text" id="validation-pprice" name="price"  class="form-control"  data-validation="[NOTEMPTY]" data-validation-message="Product Price must not be empty!">  
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Special Price</label>
                            <input type="text" name="special_price"  class="form-control"  >  
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label>Price Date</label>
                        <br />
                        <div class="mb-6">
                            <div class="row">
                                <div class="col-lg-4">
                                    <input type="text" class="form-control datepicker-only-init width-200 display-inline-block mr-2 mb-2" placeholder="Price From Date" name="price_from_date" />
                                </div>
                                <div class="col-lg-1">
                                    <div class="text-center mt-2">???</div>
                                </div>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control datepicker-only-init width-200 display-inline-block mr-2 mb-2" placeholder="Price To Date"  name="price_to_date"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6"><br><br>
                        <div class="form-group">
                            <label class="form-control-label">Is active &nbsp; &nbsp; &nbsp; &nbsp;</label>
                            <input type="checkbox" name="is_active" checked value="1" >
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary width-150" >Submit</button>
                    <button type="reset" class="btn btn-warning width-150" >Reset</button>
                    <a href="{{asset('/productprice/show/'.$productprice)}}"  class="btn btn-default">Cancel</a>
                </div>
			{!! Form::close() !!}
            </div>
 
        </div>
    </div>
</section>
<!-- END: ecommerce/product-edit -->
<!-- END: ecommerce/products-list -->

<!-- START: page scripts -->
<script>
    $(function () {

        // Datatables
        $('#example1').DataTable({
            "lengthMenu": [[10, 25, 50, 100, 200, -1], [10, 25,50, 100, 200, "All"]],
            responsive: true,
            "autoWidth": false
        });

    })
</script>
<!-- END: page scripts -->
<!-- END: page scripts -->
<!-- START: page scripts -->
<script>
    $( function() {
		$("#m_section_name").html("Product Price");
        ///////////////////////////////////////////////////////////
        // tooltips
        $("[data-toggle=tooltip]").tooltip();

        ///////////////////////////////////////////////////////////
        // chart1
        new Chartist.Line(".chart-line", {
            labels: ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
            series: [
                [5, 0, 7, 8, 12],
                [2, 1, 3.5, 7, 3],
                [1, 3, 4, 5, 6]
            ]
        }, {
            fullWidth: !0,
            chartPadding: {
                right: 40
            },
            plugins: [
                Chartist.plugins.tooltip()
            ]
        });

        ///////////////////////////////////////////////////////////
        // chart 2
        var overlappingData = {
                    labels: ["Jan", "Feb", "Mar", "Apr", "Mai", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                    series: [
                        [5, 4, 3, 7, 5, 10, 3, 4, 8, 10, 6, 8],
                        [3, 2, 9, 5, 4, 6, 4, 6, 7, 8, 7, 4]
                    ]
                },
                overlappingOptions = {
                    seriesBarDistance: 10,
                    plugins: [
                        Chartist.plugins.tooltip()
                    ]
                },
                overlappingResponsiveOptions = [
                    ["", {
                        seriesBarDistance: 5,
                        axisX: {
                            labelInterpolationFnc: function(value) {
                                return value[0]
                            }
                        }
                    }]
                ];

        new Chartist.Bar(".chart-overlapping-bar", overlappingData, overlappingOptions, overlappingResponsiveOptions);

        ///////////////////////////////////////////////////////////
        // custom scroll
        if (!('ontouchstart' in document.documentElement) && jQuery().jScrollPane) {
            $('.custom-scroll').each(function() {
                $(this).jScrollPane({
                    contentWidth: '100%',
                    autoReinitialise: true,
                    autoReinitialiseDelay: 100
                });
                var api = $(this).data('jsp'),
                        throttleTimeout;
                $(window).bind('resize', function() {
                    if (!throttleTimeout) {
                        throttleTimeout = setTimeout(function() {
                            api.reinitialise();
                            throttleTimeout = null;
                        }, 50);
                    }
                });
            });
        }

    } );
</script>
<script>
    $(function() {

        // Form Validation
        $('#form-validation').validate({
            submit: {
                settings: {
                    inputContainer: '.form-group',
                    errorListClass: 'form-control-error',
                    errorClass: 'has-danger'
                }
            }
        });

       
    });
</script>
<script>
    $(function(){
        
        $('.datepicker-only-init').datetimepicker({
            widgetPositioning: {
                horizontal: 'left'
               
            },
            icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-arrow-up",
                down: "fa fa-arrow-down",
                previous: 'fa fa-arrow-left',
                next: 'fa fa-arrow-right'
            },
            format: 'LL'
        });

    })
</script>
<!-- END: page scripts -->
@include('components/footer')
