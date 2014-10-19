<!--BEGIN SIDEBAR MENU-->
            <nav id="sidebar" role="navigation" class="navbar-default navbar-static-side">
                <div class="sidebar-collapse menu-scroll">
                    <ul id="side-menu" class="nav">
                        <li class="user-panel">
                            <div class="thumb">
                                <img src="/uifaces/faces/twitter/kolage/128.jpg" alt="" class="img-circle" />
                            </div>
                            <div class="info">
                                <p>Admin</p>
                                <ul class="list-inline list-unstyled">
                                    <li><a href="#" data-hover="tooltip" title="Thông tin cá nhân"><i class="fa fa-user"></i></a>
                                    </li>
                                    <li><a href="#" data-hover="tooltip" title="Cài đặt" data-toggle="modal" data-target="#modal-config"><i class="fa fa-cog"></i></a>
                                    </li>
                                    <li><a href="#" data-hover="tooltip" title="Thoát hệ thống"><i class="fa fa-sign-out"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                        <li<?php echo $this->Sidebar->sidebar("/","");?>><a href="/"><i class="fa fa-tachometer fa-fw"><div class="icon-bg bg-orange"></div></i><span class="menu-title">Bàn làm việc</span></a>
                        </li>
						<li<?php echo $this->Sidebar->sidebar("tinhhinhs,daos,vungbiens,quocgia,taucannbatgius","");?>><a href="#"><i class="fa fa-bullhorn fa-fw"><div class="icon-bg bg-orange"></div></i><span class="menu-title">Tình hình</span><span class="fa arrow"></span></a>						
							<ul class="nav nav-second-level">
								<li<?php echo $this->Sidebar->sidebar("tinhhinhs","");?>><a href="/tinhhinhs"><i class="fa fa-angle-right fa-fw"><div class="icon-bg bg-orange"></div></i><span class="menu-title">Tình hình trên biển</span></a>
								</li>
								<li<?php echo $this->Sidebar->sidebar("tinhhinhs","");?>><a href="/tinhhinhs"><i class="fa fa-angle-right fa-fw"><div class="icon-bg bg-orange"></div></i><span class="menu-title">Tình hình ven biển</span></a>
								</li>
								<li<?php echo $this->Sidebar->sidebar("taucannbatgius","");?>><a href="/taucannbatgius"><i class="fa fa-angle-right fa-fw"><div class="icon-bg bg-orange"></div></i><span class="menu-title">Bắt giữ tàu cá</span></a>
								</li>
								<li<?php echo $this->Sidebar->sidebar("thoitiets","");?>><a href="/thoitiets"><i class="fa fa-bullhorn fa-fw"><div class="icon-bg bg-orange"></div></i><span class="menu-title">Thời tiết</span></a>
								</li>
							</ul>
                        </li>
						<li<?php echo $this->Sidebar->sidebar("danhsaches,donvis,chucvudangs,chucvuchinhquyens,capbacs,quanhegiadinhs,quatrinhcongtacs","");?>><a href=""><i class="fa fa-bullhorn fa-fw"><div class="icon-bg bg-orange"></div></i><span class="menu-title">Quân số</span></a>
							<ul class="nav nav-second-level">
                                <li<?php echo $this->Sidebar->sidebar("danhsaches","");?>><a href="/danhsaches"><i class="fa fa-rocket"></i><span class="submenu-title">
								Danh sách
								</span></a>
                                </li>
								<li<?php echo $this->Sidebar->sidebar("donvis","");?>><a href="/donvis"><i class="fa fa-rocket"></i><span class="submenu-title">
								Đơn vị
								</span></a>
                                </li>
								<li<?php echo $this->Sidebar->sidebar("chucvudangs","");?>><a href="/chucvudangs"><i class="fa fa-rocket"></i><span class="submenu-title">
								Chức vụ Đảng
								</span></a>
                                </li>
								<li<?php echo $this->Sidebar->sidebar("chucvuchinhquyens","");?>><a href="/chucvuchinhquyens"><i class="fa fa-rocket"></i><span class="submenu-title">
								Chức vụ chính quyền
								</span></a>
                                </li>
								<li<?php echo $this->Sidebar->sidebar("capbacs","");?>><a href="capbacs"><i class="fa fa-rocket"></i><span class="submenu-title">
								Cấp bậc
								</span></a>
                                </li>
								<li<?php echo $this->Sidebar->sidebar("quanhegiadinhs","");?>><a href="/quanhegiadinhs"><i class="fa fa-rocket"></i><span class="submenu-title">
								Quan hệ gia đình
								</span></a>
                                </li>
								<li<?php echo $this->Sidebar->sidebar("quatrinhcongtacs","");?>><a href="/quatrinhcongtacs"><i class="fa fa-rocket"></i><span class="submenu-title">
								Qúa trình công tác
								</span></a>
                                </li>
                            </ul>
                        </li>
						<li<?php echo $this->Sidebar->sidebar("dangkyhoatdongs","");?>><a href="#"><i class="fa fa-bullhorn fa-fw"><div class="icon-bg bg-orange"></div></i><span class="menu-title">Hoạt động</span></a>
							<ul class="nav nav-second-level">
								<li<?php echo $this->Sidebar->sidebar("dangkyhoatdongs","");?>><a href="/vanbandens"><i class="fa fa-rocket"></i><span class="submenu-title">
								Đăng ký hoạt động
								</span></a>
                                </li>
								
							</ul>
						</li>
						<li<?php echo $this->Sidebar->sidebar("vanbandens,vanbandis,loaivanbans,linhvucs,noiguis","");?>><a href="#"><i class="fa fa-bullhorn fa-fw"><div class="icon-bg bg-orange"></div></i><span class="menu-title">Văn bản</span></a>
							<ul class="nav nav-second-level">
                                <li<?php echo $this->Sidebar->sidebar("vanbandens","");?>><a href="/vanbandens"><i class="fa fa-rocket"></i><span class="submenu-title">
								Văn bản đến
								</span></a>
                                </li>
								<li<?php echo $this->Sidebar->sidebar("vanbandis","");?>><a href="/vanbandis"><i class="fa fa-rocket"></i><span class="submenu-title">
								Văn bản đi
								</span></a>
                                </li>
								<li<?php echo $this->Sidebar->sidebar("loaivanbans","");?>><a href="/loaivanbans"><i class="fa fa-rocket"></i><span class="submenu-title">
								Loại văn bản
								</span></a>
                                </li>
								<li<?php echo $this->Sidebar->sidebar("linhvucs","");?>><a href="/linhvucs"><i class="fa fa-rocket"></i><span class="submenu-title">
								Lĩnh vực văn bản
								</span></a>
                                </li>
								<li<?php echo $this->Sidebar->sidebar("noiguis","");?>><a href="/noiguis"><i class="fa fa-rocket"></i><span class="submenu-title">
								Cơ quan ngoài
								</span></a>
                                </li>
							</ul>
                        </li>
						<li<?php echo $this->Sidebar->sidebar("vatchats,sudungvcs,suachuavcs,nhomvcs","");?>><a href="#"><i class="fa fa-bullhorn fa-fw"><div class="icon-bg bg-orange"></div></i><span class="menu-title">Vật chất</span></a>
							<ul class="nav nav-second-level">
                                <li<?php echo $this->Sidebar->sidebar("vatchats","");?>><a href="/vatchats"><i class="fa fa-rocket"></i><span class="submenu-title">
								Danh sách vật chất
								</span></a>
                                </li>
								<li<?php echo $this->Sidebar->sidebar("sudungvcs","");?>><a href="/sudungvcs"><i class="fa fa-rocket"></i><span class="submenu-title">
								Danh sách sử dụng
								</span></a>
                                </li>
								<li<?php echo $this->Sidebar->sidebar("suachuavcs","");?>><a href="/suachuavcs"><i class="fa fa-rocket"></i><span class="submenu-title">
								Danh sách sửa chữa
								</span></a>
                                </li>
								<li<?php echo $this->Sidebar->sidebar("nhomvcs","");?>><a href="/nhomvcs"><i class="fa fa-rocket"></i><span class="submenu-title">
								Danh sách nhóm VC
								</span></a>
                                </li>
							</ul>
						</li>
						<li<?php echo $this->Sidebar->sidebar("kinhphichis,kinhphichis/chuaduyet,kinhphichis/dahuy","");?>><a href="#"><i class="fa fa-bullhorn fa-fw"><div class="icon-bg bg-orange"></div></i><span class="menu-title">Kinh phí chi</span></a>
							<ul class="nav nav-second-level">
                                <li<?php echo $this->Sidebar->sidebar("kinhphichis","");?>><a href="/kinhphichis"><i class="fa fa-rocket"></i><span class="submenu-title">
								Danh sách đã chi
								</span></a>
                                </li>
								<li<?php echo $this->Sidebar->sidebar("kinhphichis","chuaduyet");?>><a href="/kinhphichis/chuaduyet"><i class="fa fa-rocket"></i><span class="submenu-title">
								Danh sách chờ duyệt
								</span></a>
                                </li>
								<li<?php echo $this->Sidebar->sidebar("kinhphichis","dahuy");?>><a href="/kinhphichis/dahuy"><i class="fa fa-rocket"></i><span class="submenu-title">
								Danh sách hủy
								</span></a>
                                </li>								
							</ul>
						</li>
						<li<?php echo $this->Sidebar->sidebar("baocaotins","");?>><a href="/baocaotins"><i class="fa fa-bullhorn fa-fw"><div class="icon-bg bg-orange"></div></i><span class="menu-title">Báo cáo tin</span></a>
                        </li>
						<li<?php echo $this->Sidebar->sidebar("ykienchidaos","");?>><a href="/ykienchidaos"><i class="fa fa-bullhorn fa-fw"><div class="icon-bg bg-orange"></div></i><span class="menu-title">Ý kiến chỉ đạo</span></a>
                        </li>
                         
						
						
						<li<?php echo $this->Sidebar->sidebar("daos,vungbiens,quocgia","");?>><a href="#"><i class="fa fa-angle-right fa-fw"><div class="icon-bg bg-orange"></div></i><span class="menu-title">Quản lý danh mục</span><span class="fa arrow"></span></a>								
							<ul class="nav nav-second-level">
								<li<?php echo $this->Sidebar->sidebar("taucas","");?>><a href="/taucas"><i class="fa fa-double-right"></i><span class="submenu-title">
								Danh sách Tàu
								</span></a>
                                </li>
								<li<?php echo $this->Sidebar->sidebar("loaitaus","");?>><a href="/loaitaus"><i class="fa fa-double-right"></i><span class="submenu-title">
								Loại tàu cá
								</span></a>
                                </li>
								<li<?php echo $this->Sidebar->sidebar("daos","");?>><a href="/daos"><i class="fa fa-angle-double-right fa-fw"><div class="icon-bg bg-orange"></div></i><span class="submenu-title">Đảo</span></a>
								</li>
								<li<?php echo $this->Sidebar->sidebar("vungbiens","");?>><a href="/vungbiens"><i class="fa fa-angle-double-right fa-fw"><div class="icon-bg bg-orange"></div></i><span class="submenu-title">Vùng biển</span></a>
								</li>
								<li<?php echo $this->Sidebar->sidebar("quocgia","");?>><a href="/quocgia"><i class="fa fa-angle-double-right fa-fw"><div class="icon-bg bg-orange"></div></i><span class="submenu-title">Quốc gia</span></a>
								</li>
							</ul>
						</li>
                        <!--li.charts-sum<div id="ajax-loaded-data-sidebar"></div>-->
                    </ul>
                </div>
            </nav>
            <!--END SIDEBAR MENU-->