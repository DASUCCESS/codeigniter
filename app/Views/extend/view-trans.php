<!-- View transaction -->
<br>
        <div class="card card-body border-0 shadow table-wrapper table-responsive mb-4">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col pb-3">
                        <h2 class="fs-5 fw-bold mb-0 pb-3">List of all orders</h2>
                        <!-- Search form -->
                        <form class="navbar-search form-inline" id="navbar-search-main">
                            <div class="input-group input-group-merge search-bar">
                                <span class="input-group-text" id="topbar-addon">
                                <svg class="icon icon-xs" x-description="Heroicon name: solid/search" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                 <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                                 </svg>
                                </span>
                                <input type="text" class="form-control" id="topbarInputIconLeft" placeholder="Search" aria-label="Search" aria-describedby="topbar-addon">
                            </div>
                        </form>
                        <!-- / Search form -->
                    </div>
                    <!-- View more and Delete all modal section -->
                    <div class="col text-end">
                        <a href="transactions.html" class="btn btn-primary">View More</a>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                         Delete all
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Delete all orders</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want to delete all orders?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Yes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of modal -->
                    </div>
                    <!-- End of view more and delete modal -->
                </div>
            </div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th class="border-gray-200">Order ID</th>
                        <th class="border-gray-200">Bill For</th>
                        <th class="border-gray-200">Issue Date</th>
                        <th class="border-gray-200">Due Date</th>
                        <th class="border-gray-200">Total</th>
                        <th class="border-gray-200">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Item -->
                    <tr>
                        <td>
                            <a href="#" class="fw-bold">
                                    456420
                                </a>
                        </td>
                        <td>
                            <span class="fw-normal">Platinum Subscription Plan</span>
                        </td>
                        <td><span class="fw-normal">1 Jan 2020</span></td>
                        <td><span class="fw-normal">1 Feb 2020</span></td>
                        <td><span class="fw-bold">₦799,00</span></td>
                        <td>
                            <div class="btn-group">
                                <button class="btn text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="icon icon-sm">
                                            <span class="fas fa-ellipsis-h icon-dark"></span>
                                        </span>
                                        <span class="visually btn btn-secondary">Change Status</span>
                                    </button>
                                <div class="dropdown-menu py-0">
                                    <a class="dropdown-item text-success rounded-top" href="#"><span class="fas fa-eye me-2"></span>Paid and Approve</a>
                                    <a class="dropdown-item text-danger" href="#"><span class="fas fa-edit me-2"></span>Cancelled</a>
                                    <a class="dropdown-item text-warning rounded-bottom" href="#"><span class="fas fa-trash-alt me-2"></span>Due</a>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="btn-group">
                                <button class="btn text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="icon icon-sm">
                                            <span class="fas fa-ellipsis-h icon-dark"></span>
                                        </span>
                                        <span class="visually btn btn-primary"> Take Action</span>
                                    </button>
                                <div class="dropdown-menu py-0">
                                    <a class="dropdown-item rounded-top" href="view-order-details.html"><span class="fas fa-eye me-2"></span>View Details</a>
                                    <a class="dropdown-item" href="#"><span class="fas fa-edit me-2"></span>Edit</a>
                                    <a class="dropdown-item text-danger rounded-bottom" href="#"><span class="fas fa-trash-alt me-2"></span>Remove</a>
                                </div>
                            </div>
                        </td>

                    </tr>
                    <!-- Item -->
                    <tr>
                        <td>
                            <a href="#" class="fw-bold">
                                    456479
                                </a>
                        </td>
                        <td>
                            <span class="fw-normal">Platinum Subscription Plan</span>
                        </td>
                        <td><span class="fw-normal">1 Dec 2019</span></td>
                        <td><span class="fw-normal">1 Jan 2020</span></td>
                        <td><span class="fw-bold">₦799,00</span></td>
                        <td>
                            <div class="btn-group">
                                <button class="btn text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="icon icon-sm">
                                            <span class="fas fa-ellipsis-h icon-dark"></span>
                                        </span>
                                        <span class="visually btn btn-secondary">Change Status</span>
                                    </button>
                                <div class="dropdown-menu py-0">
                                    <a class="dropdown-item text-success rounded-top" href="#"><span class="fas fa-eye me-2"></span>Paid and Approve</a>
                                    <a class="dropdown-item text-danger" href="#"><span class="fas fa-edit me-2"></span>Cancelled</a>
                                    <a class="dropdown-item text-warning rounded-bottom" href="#"><span class="fas fa-trash-alt me-2"></span>Due</a>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="btn-group">
                                <button class="btn text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="icon icon-sm">
                                            <span class="fas fa-ellipsis-h icon-dark"></span>
                                        </span>
                                        <span class="visually btn btn-primary"> Take Action</span>
                                    </button>
                                <div class="dropdown-menu py-0">
                                    <a class="dropdown-item rounded-top" href="view-order-details.html"><span class="fas fa-eye me-2"></span>View Details</a>
                                    <a class="dropdown-item" href="#"><span class="fas fa-edit me-2"></span>Edit</a>
                                    <a class="dropdown-item text-danger rounded-bottom" href="#"><span class="fas fa-trash-alt me-2"></span>Remove</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <!-- Item -->
                    <tr>
                        <td>
                            <a href="#" class="fw-bold">
                                    456478
                                </a>
                        </td>
                        <td>
                            <span class="fw-normal">Platinum Subscription Plan</span>
                        </td>
                        <td><span class="fw-normal">1 Nov 2019</span></td>
                        <td><span class="fw-normal">1 Dec 2019</span></td>
                        <td><span class="fw-bold">₦799,00</span></td>
                        <td>
                            <div class="btn-group">
                                <button class="btn text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="icon icon-sm">
                                            <span class="fas fa-ellipsis-h icon-dark"></span>
                                        </span>
                                        <span class="visually btn btn-secondary">Change Status</span>
                                    </button>
                                <div class="dropdown-menu py-0">
                                    <a class="dropdown-item text-success rounded-top" href="#"><span class="fas fa-eye me-2"></span>Paid and Approve</a>
                                    <a class="dropdown-item text-danger" href="#"><span class="fas fa-edit me-2"></span>Cancelled</a>
                                    <a class="dropdown-item text-warning rounded-bottom" href="#"><span class="fas fa-trash-alt me-2"></span>Due</a>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="btn-group">
                                <button class="btn text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="icon icon-sm">
                                            <span class="fas fa-ellipsis-h icon-dark"></span>
                                        </span>
                                        <span class="visually btn btn-primary"> Take Action</span>
                                    </button>
                                <div class="dropdown-menu py-0">
                                    <a class="dropdown-item rounded-top" href="view-order-details.html"><span class="fas fa-eye me-2"></span>View Details</a>
                                    <a class="dropdown-item" href="#"><span class="fas fa-edit me-2"></span>Edit</a>
                                    <a class="dropdown-item text-danger rounded-bottom" href="#"><span class="fas fa-trash-alt me-2"></span>Remove</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <!-- Item -->
                    <tr>
                        <td>
                            <a href="#" class="fw-bold">
                                    453673
                                </a>
                        </td>
                        <td>
                            <span class="fw-normal">Gold Subscription Plan</span>
                        </td>
                        <td><span class="fw-normal">1 Oct 2019</span></td>
                        <td><span class="fw-normal">1 Nov 2019</span></td>
                        <td><span class="fw-bold">₦799,00</span></td>
                        <td>
                            <div class="btn-group">
                                <button class="btn text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="icon icon-sm">
                                            <span class="fas fa-ellipsis-h icon-dark"></span>
                                        </span>
                                        <span class="visually btn btn-secondary">Change Status</span>
                                    </button>
                                <div class="dropdown-menu py-0">
                                    <a class="dropdown-item text-success rounded-top" href="#"><span class="fas fa-eye me-2"></span>Paid and Approve</a>
                                    <a class="dropdown-item text-danger" href="#"><span class="fas fa-edit me-2"></span>Cancelled</a>
                                    <a class="dropdown-item text-warning rounded-bottom" href="#"><span class="fas fa-trash-alt me-2"></span>Due</a>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="btn-group">
                                <button class="btn text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="icon icon-sm">
                                            <span class="fas fa-ellipsis-h icon-dark"></span>
                                        </span>
                                        <span class="visually btn btn-primary"> Take Action</span>
                                    </button>
                                <div class="dropdown-menu py-0">
                                    <a class="dropdown-item rounded-top" href="#"><span class="fas fa-eye me-2"></span>View Details</a>
                                    <a class="dropdown-item" href="#"><span class="fas fa-edit me-2"></span>Edit</a>
                                    <a class="dropdown-item text-danger rounded-bottom" href="#"><span class="fas fa-trash-alt me-2"></span>Remove</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <!-- Item -->
                    <tr>
                        <td>
                            <a href="#" class="fw-bold">
                                    456468
                                </a>
                        </td>
                        <td>
                            <span class="fw-normal">Gold Subscription Plan</span>
                        </td>
                        <td><span class="fw-normal">1 Sep 2019</span></td>
                        <td><span class="fw-normal">1 Oct 2019</span></td>
                        <td><span class="fw-bold">₦799,00</span></td>
                        <td>
                            <div class="btn-group">
                                <button class="btn text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="icon icon-sm">
                                            <span class="fas fa-ellipsis-h icon-dark"></span>
                                        </span>
                                        <span class="visually btn btn-secondary">Change Status</span>
                                    </button>
                                <div class="dropdown-menu py-0">
                                    <a class="dropdown-item text-success rounded-top" href="#"><span class="fas fa-eye me-2"></span>Paid and Approve</a>
                                    <a class="dropdown-item text-danger" href="#"><span class="fas fa-edit me-2"></span>Cancelled</a>
                                    <a class="dropdown-item text-warning rounded-bottom" href="#"><span class="fas fa-trash-alt me-2"></span>Due</a>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="btn-group">
                                <button class="btn text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="icon icon-sm">
                                            <span class="fas fa-ellipsis-h icon-dark"></span>
                                        </span>
                                        <span class="visually btn btn-primary"> Take Action</span>
                                    </button>
                                <div class="dropdown-menu py-0">
                                    <a class="dropdown-item rounded-top" href="#"><span class="fas fa-eye me-2"></span>View Details</a>
                                    <a class="dropdown-item" href="#"><span class="fas fa-edit me-2"></span>Edit</a>
                                    <a class="dropdown-item text-danger rounded-bottom" href="#"><span class="fas fa-trash-alt me-2"></span>Remove</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <!-- Item -->
                    <tr>
                        <td>
                            <a href="#" class="fw-bold">
                                    456478
                                </a>
                        </td>
                        <td>
                            <span class="fw-normal">Flexible Subscription Plan</span>
                        </td>
                        <td><span class="fw-normal">1 Aug 2019</span></td>
                        <td><span class="fw-normal">1 Sep 2019</span></td>
                        <td><span class="fw-bold">₦799,00</span></td>
                        <td>
                            <div class="btn-group">
                                <button class="btn text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="icon icon-sm">
                                            <span class="fas fa-ellipsis-h icon-dark"></span>
                                        </span>
                                        <span class="visually btn btn-secondary">Change Status</span>
                                    </button>
                                <div class="dropdown-menu py-0">
                                    <a class="dropdown-item text-success rounded-top" href="#"><span class="fas fa-eye me-2"></span>Paid and Approve</a>
                                    <a class="dropdown-item text-danger" href="#"><span class="fas fa-edit me-2"></span>Cancelled</a>
                                    <a class="dropdown-item text-warning rounded-bottom" href="#"><span class="fas fa-trash-alt me-2"></span>Due</a>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="btn-group">
                                <button class="btn text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="icon icon-sm">
                                            <span class="fas fa-ellipsis-h icon-dark"></span>
                                        </span>
                                        <span class="visually btn btn-primary"> Take Action</span>
                                    </button>
                                <div class="dropdown-menu py-0">
                                    <a class="dropdown-item rounded-top" href="#"><span class="fas fa-eye me-2"></span>View Details</a>
                                    <a class="dropdown-item" href="#"><span class="fas fa-edit me-2"></span>Edit</a>
                                    <a class="dropdown-item text-danger rounded-bottom" href="#"><span class="fas fa-trash-alt me-2"></span>Remove</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <!-- Item -->
                    <tr>
                        <td>
                            <a href="#" class="fw-bold">
                                    456478
                                </a>
                        </td>
                        <td>
                            <span class="fw-normal">Flexible Subscription Plan</span>
                        </td>
                        <td><span class="fw-normal">1 Aug 2019</span></td>
                        <td><span class="fw-normal">1 Sep 2019</span></td>
                        <td><span class="fw-bold">₦799,00</span></td>
                        <td>
                            <div class="btn-group">
                                <button class="btn text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="icon icon-sm">
                                            <span class="fas fa-ellipsis-h icon-dark"></span>
                                        </span>
                                        <span class="visually btn btn-secondary">Change Status</span>
                                    </button>
                                <div class="dropdown-menu py-0">
                                    <a class="dropdown-item text-success rounded-top" href="#"><span class="fas fa-eye me-2"></span>Paid and Approve</a>
                                    <a class="dropdown-item text-danger" href="#"><span class="fas fa-edit me-2"></span>Cancelled</a>
                                    <a class="dropdown-item text-warning rounded-bottom" href="#"><span class="fas fa-trash-alt me-2"></span>Due</a>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="btn-group">
                                <button class="btn text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="icon icon-sm">
                                            <span class="fas fa-ellipsis-h icon-dark"></span>
                                        </span>
                                        <span class="visually btn btn-primary"> Take Action</span>
                                    </button>
                                <div class="dropdown-menu py-0">
                                    <a class="dropdown-item rounded-top" href="#"><span class="fas fa-eye me-2"></span>View Details</a>
                                    <a class="dropdown-item" href="#"><span class="fas fa-edit me-2"></span>Edit</a>
                                    <a class="dropdown-item text-danger rounded-bottom" href="#"><span class="fas fa-trash-alt me-2"></span>Remove</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <!-- Item -->
                    <tr>
                        <td>
                            <a href="#" class="fw-bold">
                                    456478
                                </a>
                        </td>
                        <td>
                            <span class="fw-normal">Flexible Subscription Plan</span>
                        </td>
                        <td><span class="fw-normal">1 Aug 2019</span></td>
                        <td><span class="fw-normal">1 Sep 2019</span></td>
                        <td><span class="fw-bold">₦799,00</span></td>
                        <td>
                            <div class="btn-group">
                                <button class="btn text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="icon icon-sm">
                                            <span class="fas fa-ellipsis-h icon-dark"></span>
                                        </span>
                                        <span class="visually btn btn-secondary">Change Status</span>
                                    </button>
                                <div class="dropdown-menu py-0">
                                    <a class="dropdown-item text-success rounded-top" href="#"><span class="fas fa-eye me-2"></span>Paid and Approve</a>
                                    <a class="dropdown-item text-danger" href="#"><span class="fas fa-edit me-2"></span>Cancelled</a>
                                    <a class="dropdown-item text-warning rounded-bottom" href="#"><span class="fas fa-trash-alt me-2"></span>Due</a>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="btn-group">
                                <button class="btn text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="icon icon-sm">
                                            <span class="fas fa-ellipsis-h icon-dark"></span>
                                        </span>
                                        <span class="visually btn btn-primary"> Take Action</span>
                                    </button>
                                <div class="dropdown-menu py-0">
                                    <a class="dropdown-item rounded-top" href="#"><span class="fas fa-eye me-2"></span>View Details</a>
                                    <a class="dropdown-item" href="#"><span class="fas fa-edit me-2"></span>Edit</a>
                                    <a class="dropdown-item text-danger rounded-bottom" href="#"><span class="fas fa-trash-alt me-2"></span>Remove</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <!-- Item -->
                    <tr>
                        <td>
                            <a href="#" class="fw-bold">
                                    456478
                                </a>
                        </td>
                        <td>
                            <span class="fw-normal">Flexible Subscription Plan</span>
                        </td>
                        <td><span class="fw-normal">1 Aug 2019</span></td>
                        <td><span class="fw-normal">1 Sep 2019</span></td>
                        <td><span class="fw-bold">₦799,00</span></td>
                        <td>
                            <div class="btn-group">
                                <button class="btn text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="icon icon-sm">
                                            <span class="fas fa-ellipsis-h icon-dark"></span>
                                        </span>
                                        <span class="visually btn btn-secondary">Change Status</span>
                                    </button>
                                <div class="dropdown-menu py-0">
                                    <a class="dropdown-item text-success rounded-top" href="#"><span class="fas fa-eye me-2"></span>Paid and Approve</a>
                                    <a class="dropdown-item text-danger" href="#"><span class="fas fa-edit me-2"></span>Cancelled</a>
                                    <a class="dropdown-item text-warning rounded-bottom" href="#"><span class="fas fa-trash-alt me-2"></span>Due</a>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="btn-group">
                                <button class="btn text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="icon icon-sm">
                                            <span class="fas fa-ellipsis-h icon-dark"></span>
                                        </span>
                                        <span class="visually btn btn-primary"> Take Action</span>
                                    </button>
                                <div class="dropdown-menu py-0">
                                    <a class="dropdown-item rounded-top" href="#"><span class="fas fa-eye me-2"></span>View Details</a>
                                    <a class="dropdown-item" href="#"><span class="fas fa-edit me-2"></span>Edit</a>
                                    <a class="dropdown-item text-danger rounded-bottom" href="#"><span class="fas fa-trash-alt me-2"></span>Remove</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <!-- Item -->
                    <tr>
                        <td>
                            <a href="#" class="fw-bold">
                                    456478
                                </a>
                        </td>
                        <td>
                            <span class="fw-normal">Flexible Subscription Plan</span>
                        </td>
                        <td><span class="fw-normal">1 Aug 2019</span></td>
                        <td><span class="fw-normal">1 Sep 2019</span></td>
                        <td><span class="fw-bold">₦799,00</span></td>
                        <td>
                            <div class="btn-group">
                                <button class="btn text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="icon icon-sm">
                                            <span class="fas fa-ellipsis-h icon-dark"></span>
                                        </span>
                                        <span class="visually btn btn-secondary">Change Status</span>
                                    </button>
                                <div class="dropdown-menu py-0">
                                    <a class="dropdown-item text-success rounded-top" href="#"><span class="fas fa-eye me-2"></span>Paid and Approve</a>
                                    <a class="dropdown-item text-danger" href="#"><span class="fas fa-edit me-2"></span>Cancelled</a>
                                    <a class="dropdown-item text-warning rounded-bottom" href="#"><span class="fas fa-trash-alt me-2"></span>Due</a>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="btn-group">
                                <button class="btn text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="icon icon-sm">
                                            <span class="fas fa-ellipsis-h icon-dark"></span>
                                        </span>
                                        <span class="visually btn btn-primary"> Take Action</span>
                                    </button>
                                <div class="dropdown-menu py-0">
                                    <a class="dropdown-item rounded-top" href="#"><span class="fas fa-eye me-2"></span>View Details</a>
                                    <a class="dropdown-item" href="#"><span class="fas fa-edit me-2"></span>Edit</a>
                                    <a class="dropdown-item text-danger rounded-bottom" href="#"><span class="fas fa-trash-alt me-2"></span>Remove</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#" class="fw-bold">
                                    456478
                                </a>
                        </td>
                        <td>
                            <span class="fw-normal">Flexible Subscription Plan</span>
                        </td>
                        <td><span class="fw-normal">1 Aug 2019</span></td>
                        <td><span class="fw-normal">1 Sep 2019</span></td>
                        <td><span class="fw-bold">₦799,00</span></td>
                        <td>
                            <div class="btn-group">
                                <button class="btn text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="icon icon-sm">
                                            <span class="fas fa-ellipsis-h icon-dark"></span>
                                        </span>
                                        <span class="visually btn btn-secondary">Change Status</span>
                                    </button>
                                <div class="dropdown-menu py-0">
                                    <a class="dropdown-item text-success rounded-top" href="#"><span class="fas fa-eye me-2"></span>Paid and Approve</a>
                                    <a class="dropdown-item text-danger" href="#"><span class="fas fa-edit me-2"></span>Cancelled</a>
                                    <a class="dropdown-item text-warning rounded-bottom" href="#"><span class="fas fa-trash-alt me-2"></span>Due</a>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="btn-group">
                                <button class="btn text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="icon icon-sm">
                                            <span class="fas fa-ellipsis-h icon-dark"></span>
                                        </span>
                                        <span class="visually btn btn-primary"> Take Action</span>
                                    </button>
                                <div class="dropdown-menu py-0">
                                    <a class="dropdown-item rounded-top" href="#"><span class="fas fa-eye me-2"></span>View Details</a>
                                    <a class="dropdown-item" href="#"><span class="fas fa-edit me-2"></span>Edit</a>
                                    <a class="dropdown-item text-danger rounded-bottom" href="#"><span class="fas fa-trash-alt me-2"></span>Remove</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="card-footer px-3 border-0 d-flex flex-column flex-lg-row align-items-center justify-content-between">
                <nav aria-label="Page navigation example">
                    <ul class="pagination mb-0">
                        <li class="page-item">
                            <a class="page-link" href="#">Previous</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">4</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">5</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
                <div class="fw-normal small mt-4 mt-lg-0">Showing <b>11</b> out of <b>250</b> entries</div>
            </div>
        </div>