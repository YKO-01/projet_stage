<div class="sidebar widget advanced-search">
                        <h3 class="sidebar-title">البحث المتقدم</h3>
                        <form name="advsrch" action="http://thavasu.com/demo/property-listing/property-list" method="post">
                            <div class="form-group">
                                <input type="text" name="keyword" placeholder="ادخل الموقع" class="form-control selectpicker search-fields">
                            </div>
                            <div class="row">
							<div class="col-lg-6">
							<div class="form-group">
                                <select class="selectpicker search-fields" name="pfor">
                                   <option value="">الملكية ل</option>
                                   <option value="rent">إيجار</option>
                                   <option value="sale">تخفيض السعر</option>
                                   <option value="lease">إيجار</option>
                                </select>
                            </div>
							</div>
							<div class="col-lg-6">
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="categ">
								 <option value="">الفئة</option>
                                    <option value="market" >متجر</option><!--<option value="bspace" >Hawaii</option>--><option value="bforsale" >ايجار</option><!--<option value="commercial" >Commercial</option>--><option value="land" >أرض</option><option value="villa" >منزل</option>                                </select>
                            </div>
						</div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                             <select class="selectpicker search-fields" name="bed">
                                             <option value="">غرف النوم</option>
                                             <option value="1">1</option>
                                             <option value="2">2</option>
                                             <option value="3">3</option>
                                             <option value="4">4</option>
                                             <option value="5">4+</option>
                                             <!--<option value="6">6</option>
                                             <option value="7">7</option>
                                             <option value="8">8</option>
                                             <option value="9">9</option>
                                             <option value="10">10</option>-->
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="bath">
                                            <option value="">عدد الحمامات</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">4+</option>
                                            <!--<option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>-->
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <!--<div class="col-lg-6">
                                    <div class="form-group">
                                      <div class="form-group">
                                        <input type="text" name="min" id="min" class="form-control banner-group-brdr selectpicker search-fields" placeholder="Min.Amount">
                                    </div>  
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="form-group">
                                  <input type="text" name="max" id="max" class="form-control banner-group-brdr selectpicker search-fields" placeholder="Max.Amount">
                                    </div> 
                                    </div>
                                </div>-->
                            </div>
                            <div class="form-group mb-0">
                                <button type="submit" class="search-button" name="advsrch" onclick="" >بحث</button>
                            </div>
                        </form>
                     </div>