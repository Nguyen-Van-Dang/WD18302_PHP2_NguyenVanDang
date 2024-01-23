<div class="mt-4 mb-4 p-3 bg-white border shadow-sm lh-sm">
                    <!--Order Listing-->
                    <div class="product-list">
                        
                        <div class="row border-bottom mb-4">
                            <div class="col-sm-8 pt-2"><h6 class="mb-4 bc-header">Order listing</h6></div>
                            <div class="col-sm-4 text-right pb-3">
                                <button type="button" class="btn btn-danger icon-round shadow pull-right">
                                    <i class="fas fa-trash"></i>
                                </button>

                                <div class="pull-right mr-3 btn-order-bulk">
                                    <select class="shadow bg-secondary bulk-actions" style="display: none;">
                                        <option data-display="<span class='text-white'><b>Bulk status</b></span>">Status options</option>
                                        <option value="1">Pending</option>
                                        <option value="2">Cancelled</option>
                                        <option value="4">Delivered</option>
                                    </select><div class="nice-select shadow bg-secondary bulk-actions" tabindex="0"><span class="current"><span class="text-white"><b>Bulk status</b></span></span><ul class="list"><li data-value="Status options" data-display="<span class='text-white'><b>Bulk status</b></span>" class="option selected">Status options</li><li data-value="1" class="option">Pending</li><li data-value="2" class="option">Cancelled</li><li data-value="4" class="option">Delivered</li></ul></div>
                                </div>

                                <div class="clearfix"></div>
                            </div>
                        </div>
                        
                        <div class="table-responsive product-list">
                            
                            <div id="productList_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="productList_length"><label>Show <select name="productList_length" aria-controls="productList" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="productList_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="productList"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-bordered table-striped mt-3 dataTable no-footer" id="productList" role="grid" aria-describedby="productList_info">
                                <thead>
                                    <tr role="row"><th style="width: 30.2px;" class="p-0 pr-4 align-middle sorting_asc" tabindex="0" aria-controls="productList" rowspan="1" colspan="1" aria-sort="ascending" aria-label="
                                            
                                                
                                                    
                                                    
                                                
                                            
                                        : activate to sort column descending">
                                            <div class="form-check-box cta">
                                                <span class="color1">
                                                    <input type="checkbox" id="orderAll">
                                                    <label for="orderAll"></label>
                                                </span>
                                            </div>
                                        </th><th class="sorting" tabindex="0" aria-controls="productList" rowspan="1" colspan="1" aria-label="Order ID: activate to sort column ascending" style="width: 114.2px;">Order ID</th><th class="sorting" tabindex="0" aria-controls="productList" rowspan="1" colspan="1" aria-label="Customer: activate to sort column ascending" style="width: 154.2px;">Customer</th><th class="sorting" tabindex="0" aria-controls="productList" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 92.2px;">Status</th><th class="sorting" tabindex="0" aria-controls="productList" rowspan="1" colspan="1" aria-label="Total: activate to sort column ascending" style="width: 77.2px;">Total</th><th class="sorting" tabindex="0" aria-controls="productList" rowspan="1" colspan="1" aria-label="Order date: activate to sort column ascending" style="width: 143.2px;">Order date</th><th class="sorting" tabindex="0" aria-controls="productList" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 198px;">Action</th></tr>
                                </thead>
                                <tbody>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                <tr role="row" class="odd">
                                        <td style="width: 10px;" class="p-0 pr-1 align-middle sorting_1">
                                            <div class="form-check-box cta">
                                                <span class="color1">
                                                    <input type="checkbox" id="order1">
                                                    <label for="order1"></label>
                                                </span>
                                            </div>
                                        </td>
                                        <td>Ord#13</td>
                                        <td class="align-middle">
                                            Stephanie Cott
                                        </td>
                                        <td class="align-middle"><span class="badge badge-warning">Pending</span></td>
                                        <td class="align-middle">$200</td>
                                        <td>15/09/2018</td>
                                        <td class="align-middle text-center">
                                            <button class="btn btn-theme" data-toggle="modal" data-target="#orderInfo">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                            <button class="btn btn-success" data-toggle="modal" data-target="#orderUpdate"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr><tr role="row" class="even">
                                        <td style="width: 10px;" class="p-0 pr-1 align-middle sorting_1">
                                            <div class="form-check-box cta">
                                                <span class="color1">
                                                    <input type="checkbox" id="order2">
                                                    <label for="order2"></label>
                                                </span>
                                            </div>
                                        </td>
                                        <td>Ord#14</td>
                                        <td class="align-middle">
                                            Andy Webb
                                        </td>
                                        <td class="align-middle"><span class="badge badge-danger">Cancelled</span></td>
                                        <td class="align-middle">$200</td>
                                        <td>15/09/2018</td>
                                        <td class="align-middle text-center">
                                            <button class="btn btn-theme" data-toggle="modal" data-target="#orderInfo">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                            <button class="btn btn-success" data-toggle="modal" data-target="#orderUpdate"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr><tr role="row" class="odd">
                                        <td style="width: 10px;" class="p-0 pr-1 align-middle sorting_1">
                                            <div class="form-check-box cta">
                                                <span class="color1">
                                                    <input type="checkbox" id="order3">
                                                    <label for="order3"></label>
                                                </span>
                                            </div>
                                        </td>
                                        <td>Ord#15</td>
                                        <td class="align-middle">
                                            Andy Webb
                                        </td>
                                        <td class="align-middle"><span class="badge badge-success">Delivered</span></td>
                                        <td class="align-middle">$200</td>
                                        <td>15/09/2018</td>
                                        <td class="align-middle text-center">
                                            <button class="btn btn-theme" data-toggle="modal" data-target="#orderInfo">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                            <button class="btn btn-success" data-toggle="modal" data-target="#orderUpdate"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr><tr role="row" class="even">
                                        <td style="width: 10px;" class="p-0 pr-1 align-middle sorting_1">
                                            <div class="form-check-box cta">
                                                <span class="color1">
                                                    <input type="checkbox" id="order4">
                                                    <label for="order4"></label>
                                                </span>
                                            </div>
                                        </td>
                                        <td>Ord#16</td>
                                        <td class="align-middle">
                                            Stephanie Cott
                                        </td>
                                        <td class="align-middle"><span class="badge badge-warning">Pending</span></td>
                                        <td class="align-middle">$200</td>
                                        <td>15/09/2018</td>
                                        <td class="align-middle text-center">
                                            <button class="btn btn-theme" data-toggle="modal" data-target="#orderInfo">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                            <button class="btn btn-success" data-toggle="modal" data-target="#orderUpdate"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr><tr role="row" class="odd">
                                        <td style="width: 10px;" class="p-0 pr-1 align-middle sorting_1">
                                            <div class="form-check-box cta">
                                                <span class="color1">
                                                    <input type="checkbox" id="order5">
                                                    <label for="order5"></label>
                                                </span>
                                            </div>
                                        </td>
                                        <td>Ord#17</td>
                                        <td class="align-middle">
                                            Andy Webb
                                        </td>
                                        <td class="align-middle"><span class="badge badge-danger">Cancelled</span></td>
                                        <td class="align-middle">$200</td>
                                        <td>15/09/2018</td>
                                        <td class="align-middle text-center">
                                            <button class="btn btn-theme" data-toggle="modal" data-target="#orderInfo">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                            <button class="btn btn-success" data-toggle="modal" data-target="#orderUpdate"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr><tr role="row" class="even">
                                        <td style="width: 10px;" class="p-0 pr-1 align-middle sorting_1">
                                            <div class="form-check-box cta">
                                                <span class="color1">
                                                    <input type="checkbox" id="order6">
                                                    <label for="order6"></label>
                                                </span>
                                            </div>
                                        </td>
                                        <td>Ord#18</td>
                                        <td class="align-middle">
                                            Andy Webb
                                        </td>
                                        <td class="align-middle"><span class="badge badge-success">Delivered</span></td>
                                        <td class="align-middle">$200</td>
                                        <td>15/09/2018</td>
                                        <td class="align-middle text-center">
                                            <button class="btn btn-theme" data-toggle="modal" data-target="#orderInfo">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                            <button class="btn btn-success" data-toggle="modal" data-target="#orderUpdate"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr><tr role="row" class="odd">
                                        <td style="width: 10px;" class="p-0 pr-1 align-middle sorting_1">
                                            <div class="form-check-box cta">
                                                <span class="color1">
                                                    <input type="checkbox" id="order7">
                                                    <label for="order7"></label>
                                                </span>
                                            </div>
                                        </td>
                                        <td>Ord#19</td>
                                        <td class="align-middle">
                                            Stephanie Cott
                                        </td>
                                        <td class="align-middle"><span class="badge badge-warning">Pending</span></td>
                                        <td class="align-middle">$200</td>
                                        <td>15/09/2018</td>
                                        <td class="align-middle text-center">
                                            <button class="btn btn-theme" data-toggle="modal" data-target="#orderInfo">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                            <button class="btn btn-success" data-toggle="modal" data-target="#orderUpdate"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr><tr role="row" class="even">
                                        <td style="width: 10px;" class="p-0 pr-1 align-middle sorting_1">
                                            <div class="form-check-box cta">
                                                <span class="color1">
                                                    <input type="checkbox" id="order8">
                                                    <label for="order8"></label>
                                                </span>
                                            </div>
                                        </td>
                                        <td>Ord#20</td>
                                        <td class="align-middle">
                                            Andy Webb
                                        </td>
                                        <td class="align-middle"><span class="badge badge-danger">Cancelled</span></td>
                                        <td class="align-middle">$200</td>
                                        <td>15/09/2018</td>
                                        <td class="align-middle text-center">
                                            <button class="btn btn-theme" data-toggle="modal" data-target="#orderInfo">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                            <button class="btn btn-success" data-toggle="modal" data-target="#orderUpdate"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr><tr role="row" class="odd">
                                        <td style="width: 10px;" class="p-0 pr-1 align-middle sorting_1">
                                            <div class="form-check-box cta">
                                                <span class="color1">
                                                    <input type="checkbox" id="order9">
                                                    <label for="order9"></label>
                                                </span>
                                            </div>
                                        </td>
                                        <td>Ord#21</td>
                                        <td class="align-middle">
                                            Andy Webb
                                        </td>
                                        <td class="align-middle"><span class="badge badge-success">Delivered</span></td>
                                        <td class="align-middle">$200</td>
                                        <td>15/09/2018</td>
                                        <td class="align-middle text-center">
                                            <button class="btn btn-theme" data-toggle="modal" data-target="#orderInfo">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                            <button class="btn btn-success" data-toggle="modal" data-target="#orderUpdate"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr><tr role="row" class="even">
                                        <td style="width: 10px;" class="p-0 pr-1 align-middle sorting_1">
                                            <div class="form-check-box cta">
                                                <span class="color1">
                                                    <input type="checkbox" id="order10">
                                                    <label for="order10"></label>
                                                </span>
                                            </div>
                                        </td>
                                        <td>Ord#22</td>
                                        <td class="align-middle">
                                            Stephanie Cott
                                        </td>
                                        <td class="align-middle"><span class="badge badge-warning">Pending</span></td>
                                        <td class="align-middle">$200</td>
                                        <td>15/09/2018</td>
                                        <td class="align-middle text-center">
                                            <button class="btn btn-theme" data-toggle="modal" data-target="#orderInfo">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                            <button class="btn btn-success" data-toggle="modal" data-target="#orderUpdate"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr></tbody>
                            </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="productList_info" role="status" aria-live="polite">Showing 1 to 10 of 12 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="productList_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="productList_previous"><a href="#" aria-controls="productList" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="productList" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="productList" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item next" id="productList_next"><a href="#" aria-controls="productList" data-dt-idx="3" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                        </div>
                    </div>
                    <!--/Order Listing-->

                    <!--Order Info Modal-->
                    <div class="modal fade" id="orderInfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Ord#13 details</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="row">Item</th>
                                                <th>Quantity</th>
                                                <th>Unit price</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td scope="row">Red Shoes</td>
                                                <td>2</td>
                                                <td>$400</td>
                                                <td>$800</td>
                                            </tr>
                                            <tr>
                                                <td scope="row">Blue shirt</td>
                                                <td>1</td>
                                                <td>$400</td>
                                                <td>$400</td>
                                            </tr>
                                            <tr>
                                                <td scope="row">Knickers</td>
                                                <td>3</td>
                                                <td>$300</td>
                                                <td>$900</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <div class="text-right mt-4 p-4">
                                        <p><strong>Sub - Total amount: $14,768.00</strong></p>
                                        <p><strong>Shipping: $1000.00</strong></p>
                                        <p><span>vat(10%): $150.00</span></p>
                                        <h4 class="mt-2"><strong>Total: $16,050.00</strong></h4>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Order Info Modal-->

                    <!--Order Update Modal-->
                    <div class="modal fade" id="orderUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Ord#13 details update</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th scope="row">Item</th>
                                                <th class="order-qty-head">Quantity</th>
                                                <th>Unit price</th>
                                                <th>Total</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="align-middle">01</td>
                                                <td scope="row" class="align-middle">Red Shoes</td>
                                                <td class="text-center align-middle"><input type="text" value="2" class="order-qty"></td>
                                                <td class="align-middle">$400</td>
                                                <td class="align-middle">$800</td>
                                                <td style="width: 120px;" class="align-middle">
                                                    <button class="btn btn-theme mr-1"><i class="fa fa-pencil-square-o"></i></button>
                                                    <button class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="align-middle">02</td>
                                                <td class="align-middle" scope="row">Blue shirt</td>
                                                <td class="text-center align-middle"><input type="text" value="1" class="order-qty"></td>
                                                <td class="align-middle">$400</td>
                                                <td class="align-middle">$400</td>
                                                <td class="align-middle">
                                                    <button class="btn btn-theme mr-1"><i class="fa fa-pencil-square-o"></i></button>
                                                    <button class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="align-middle">03</td>
                                                <td class="align-middle" scope="row">Knickers</td>
                                                <td class="text-center align-middle"><input type="text" value="3" class="order-qty"></td>
                                                <td class="align-middle">$300</td>
                                                <td class="align-middle">$900</td>
                                                <td class="align-middle">
                                                    <button class="btn btn-theme mr-1"><i class="fa fa-pencil-square-o"></i></button>
                                                    <button class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <div class="text-right mt-4 p-4">
                                        <p><strong>Sub - Total amount: $14,768.00</strong></p>
                                        <p><strong>Shipping: $1000.00</strong></p>
                                        <p><span>vat(10%): $150.00</span></p>
                                        <h4 class="mt-2"><strong>Total: $16,050.00</strong></h4>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Order Update Modal-->
                </div>