        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="dlabnav">
            <div class="dlabnav-scroll">
                <ul class="metismenu" id="menu">
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <i class="fas fa-home"></i>
                            <span class="nav-text">Dashboard</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            {{-- <li><a href="index-2.html">Dashboard Dark</a></li>
							<li><a href="project-page.html">Project</a></li>
							<li><a href="contacts.html">Contacts</a></li>
							<li><a href="kanban.html">Kanban</a></li>
							<li><a href="calendar-page.html">Calendar</a></li>
							<li><a href="message.html">Messages</a></li> --}}
                        </ul>

                    </li>

                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                        {{-- Add color to icon --}}
                            {{-- <i class="fas fa-user-graduate" style='color: blue'></i> --}}
                            <i class="fas fa-user-graduate"></i>
                            <span class="nav-text">Students</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('admin.students.index') }}">All Students</a></li>
                            <li><a href="{{ route('admin.students.create') }}">Create New Student</a></li>
                            {{-- <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Email</a>
                                <ul aria-expanded="false">
                                    <li><a href="email-compose.html">Compose</a></li>
                                    <li><a href="email-inbox.html">Inbox</a></li>
                                    <li><a href="email-read.html">Read</a></li>
                                </ul>
                            </li>
                            <li><a href="app-calender.html">Calendar</a></li>
							<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Shop</a>
                                <ul aria-expanded="false">
                                    <li><a href="ecom-product-grid.html">Product Grid</a></li>
									<li><a href="ecom-product-list.html">Product List</a></li>
									<li><a href="ecom-product-detail.html">Product Details</a></li>
									<li><a href="ecom-product-order.html">Order</a></li>
									<li><a href="ecom-checkout.html">Checkout</a></li>
									<li><a href="ecom-invoice.html">Invoice</a></li>
									<li><a href="ecom-customers.html">Customers</a></li>
                                </ul>
                            </li> --}}
                        </ul>
                    </li>
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <i class="fas fa-chalkboard-teacher"></i>
                            <span class="nav-text">Teachers</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('admin.teachers.index') }}">All Teachers</a></li>
                            <li><a href="{{ route('admin.teachers.create') }}">Create New Teacher</a></li>
                            {{-- <li><a href="chart-chartjs.html">Chartjs</a></li>
                            <li><a href="chart-chartist.html">Chartist</a></li>
                            <li><a href="chart-sparkline.html">Sparkline</a></li>
                            <li><a href="chart-peity.html">Peity</a></li> --}}
                        </ul>
                    </li>
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <i class="fas fa-laptop-code"></i>
                            <span class="nav-text">Courses</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('admin.courses.index') }}">All Courses</a></li>
                            <li><a href="{{ route('admin.courses.create') }}">Create New Course</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-book"></i>
                            <span class="nav-text">Lessons</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('admin.lessons.index') }}">All Lessons</a></li>
                            <li><a href="{{ route('admin.create_lesson_youtube') }}">Create Lesson youtube</a></li>
                            <li><a href="{{ route('admin.create_inweb') }}">Create Lesson In Web</a></li>
                            {{-- <li><a href="uc-sweetalert.html">Sweet Alert</a></li>
                            <li><a href="uc-toastr.html">Toastr</a></li>
                            <li><a href="map-jqvmap.html">Jqv Map</a></li>
							<li><a href="uc-lightgallery.html">Light Gallery</a></li> --}}
                        </ul>
                    </li>
                    {{-- <li><a href="widget-basic.html" class="" aria-expanded="false">
							<i class="fas fa-user-check"></i>
							<span class="nav-text">Widget</span>
						</a>
					</li> --}}
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <i class="fas fa-file-alt"></i>
                            <span class="nav-text">Categories</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('admin.categories.index') }}">All Categories</a></li>
                            <li><a href="{{ route('admin.categories.create') }}">Create New Category</a></li>
                            {{-- <li><a href="form-ckeditor.html">CkEditor</a></li>
                            <li><a href="form-pickers.html">Pickers</a></li>
                            <li><a href="form-validation.html">Form Validate</a></li> --}}
                        </ul>
                    </li>
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <i class="fas fa-table"></i>
                            <span class="nav-text">Sub Categories</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('admin.subcategories.index') }}">All Sub Categories</a></li>
                            <li><a href="{{ route('admin.subcategories.create') }}">Create New Sub Categories</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <i class="fas fa-clone"></i>
                            <span class="nav-text">Sliders</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('admin.sliders.index') }}">All Sliders</a></li>
                            <li><a href="{{ route('admin.sliders.create') }}">Create New Slider</a></li>
                        </ul>
                    </li>

                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                        <i class="fa fa-image"></i>
                        <span class="nav-text">Gallery</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="{{ route('admin.galleries.index') }}">All Image</a></li>
                        <li><a href="{{ route('admin.form.upload.images') }}">Create New image</a></li>
                    </ul>
                </li>
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <i class="fas fa-angle-double-down"></i>
                            <span class="nav-text">Discounts</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('admin.discounts.index') }}">All Discounts</a></li>
                            <li><a href="{{ route('admin.discounts.create') }}">Create New Discount</a></li>
                            {{-- <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                                <ul aria-expanded="false">
                                    <li><a href="page-error-400.html">Error 400</a></li>
                                    <li><a href="page-error-403.html">Error 403</a></li>
                                    <li><a href="page-error-404.html">Error 404</a></li>
                                    <li><a href="page-error-500.html">Error 500</a></li>
                                    <li><a href="page-error-503.html">Error 503</a></li>
                                </ul>
                            </li>
                            <li><a href="page-lock-screen.html">Lock Screen</a></li>
                            <li><a href="empty-page.html">Empty Page</a></li> --}}
                        </ul>
                    </li>

                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                            <i class="fas fa-shield-alt"></i>
                            <span class="nav-text">Settings</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('admin.settings.index') }}">All Settinds</a></li>
                            @foreach ($settings as $setting)
                                <li><a href="{{ route('admin.settings.edit', $setting) }}">Update Settings</a></li>
                            @endforeach
                            {{-- <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                            <ul aria-expanded="false">
                                <li><a href="page-error-400.html">Error 400</a></li>
                                <li><a href="page-error-403.html">Error 403</a></li>
                                <li><a href="page-error-404.html">Error 404</a></li>
                                <li><a href="page-error-500.html">Error 500</a></li>
                                <li><a href="page-error-503.html">Error 503</a></li>
                            </ul>
                        </li>
                        <li><a href="page-lock-screen.html">Lock Screen</a></li>
                        <li><a href="empty-page.html">Empty Page</a></li> --}}
                        </ul>
                    </li>
                </ul>
                <div class="side-bar-profile">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div class="side-bar-profile-img">
                            <img src="images/user.jpg" alt="">
                        </div>
                        <div class="profile-info1">
                            <h4 class="fs-18 font-w500">Soeng Souy</h4>
                            <span>example@mail.com</span>
                        </div>
                        <div class="profile-button">
                            <i class="fas fa-caret-down scale5 text-light"></i>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between mb-2 progress-info">
                        <span class="fs-12"><i class="fas fa-star text-orange me-2"></i>Task Progress</span>
                        <span class="fs-12">20/45</span>
                    </div>
                    <div class="progress default-progress">
                        <div class="progress-bar bg-gradientf progress-animated" style="width: 45%; height:10px;"
                            role="progressbar">
                            <span class="sr-only">45% Complete</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
