@extends('layout.master.master')

@section('title','User Details')

@section('content')
    <section class="box_containner">
        <div class="container-fluid">
            <div class="row">
                <section class="form-box">
                    <div class="col-sm-12">
                        <div class="form-wizard form-header-modarn form-body-material">
                            <!--Just change the class name for make it with different style of design.
                            Use anyone class "form-header-classic" or "form-header-modarn" or "form-header-stylist" for set your form header design. Use anyone class "form-body-classic" or "form-body-material" or "form-body-stylist" for set your form element design.
                            -->
                            <form role="form" action="" method="post">
                                <div class="basic_heading"><span class="dash_head_txt">Edit Restuarent Details</span>
                                </div>
                                <div class="form_allcontainer">
                                    <div class="form-wizard-steps form-wizard-tolal-steps-4">
                                        <div class="form-wizard-progress">
                                            <div class="form-wizard-progress-line" data-now-value="12.25"
                                                 data-number-of-steps="4" style="width: 37.25%;"></div>
                                        </div>
                                        <div class="form-wizard-step active">
                                            <div class="form-wizard-step-icon"><i class="mdi mdi-silverware"
                                                                                  aria-hidden="true"></i></div>
                                            <p>Restuarent</p>
                                        </div>
                                        <div class="form-wizard-step">
                                            <div class="form-wizard-step-icon"><i class="mdi mdi-truck-delivery"
                                                                                  aria-hidden="true"></i>
                                            </div>
                                            <p>Delivery </p>
                                        </div>
                                        <div class="form-wizard-step">
                                            <div class="form-wizard-step-icon"><i class="mdi mdi-food-fork-drink"
                                                                                  aria-hidden="true"></i>
                                            </div>
                                            <p>Cusinis</p>
                                        </div>
                                        <div class="form-wizard-step">
                                            <div class="form-wizard-step-icon"><i class="mdi mdi-file-document"
                                                                                  aria-hidden="true"></i>
                                            </div>
                                            <p>Others</p>
                                        </div>
                                    </div>
                                    <fieldset>
                                        <!-- Progress Bar -->
                                        <div class="progress wizard_progress">
                                            <div class="progress-bar progress-bar-striped active" role="progressbar"
                                                 aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"
                                                 style="width: 25%">
                                            </div>
                                        </div>
                                        <!-- Progress Bar -->
                                        <!-- <h4>Restuarent Details : <span>Step 1 - 4</span></h4>-->
                                        <div class="row form-group">
                                            <div class="col-sm-6">
                                                <input type="name" placeholder="Owner Name"
                                                       class="form-control txt_wizard required">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="email" placeholder="Owner Email"
                                                       class="form-control txt_wizard required">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sm-6">
                                                <input type="name" placeholder="Owner Contact No."
                                                       class="form-control txt_wizard required">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="email" placeholder="Registered Name Of Business"
                                                       class="form-control txt_wizard required">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sm-6">
                                                <input type="name" placeholder="Manager Contact No."
                                                       class="form-control txt_wizard"/>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="email" placeholder="Manager Email Id "
                                                       class="form-control txt_wizard"/>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sm-6">
                                                <input type="name" placeholder="Restaurant Name"
                                                       class="form-control txt_wizard required">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="email" placeholder="City"
                                                       class="form-control txt_wizard">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sm-6">
                                                <input type="name" placeholder="State"
                                                       class="form-control txt_wizard">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="email" placeholder="Website"
                                                       class="form-control txt_wizard">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sm-12">
                                            <textarea class="form-control glo_txtarea txt_wizard" rows="3"
                                                      placeholder="Restuarent Address"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-wizard-buttons">
                                            <button type="button" class="btn btn-next">Next</button>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <!-- Progress Bar -->
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped active" role="progressbar"
                                                 aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"
                                                 style="width: 50%">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sm-6">
                                                <input type="name" placeholder="Minimum Order Value"
                                                       class="form-control txt_wizard">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="name" placeholder="Name of Staff Talking Order"
                                                       class="form-control txt_wizard">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sm-6">
                                                <input type="email" placeholder="Email Id to receive Order"
                                                       class="form-control txt_wizard required">
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="self_delivery_row">
                                                    <div class="self_txt">Self Delivery :</div>
                                                    <div class="radio">
                                                        <input id="self_no" name="radio" type="radio" checked=""
                                                               onchange="DeliverySelect(this);">
                                                        <label for="self_no" class="radio-label">No </label>
                                                    </div>
                                                    <div class="radio">
                                                        <input id="self_yes" name="radio" type="radio"
                                                               onchange="DeliverySelect(this);">
                                                        <label for="self_yes" class="radio-label">Yes</label>
                                                    </div>
                                                    <input type="email" placeholder="Delivery Fee"
                                                           class="form-control txt_wizard self_delivery_fee_txt self_delivery">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row form-group self_delivery">
                                            <div class="col-sm-6">
                                                <select class="form-control">
                                                    <option selected="">Delivery Distance</option>
                                                    <option value="1">0-1</option>
                                                    <option value="2">0-2</option>
                                                    <option value="3">0-3</option>
                                                    <option value="4">0-4</option>
                                                    <option value="5">0-5</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-6">
                                                <select class="form-control">
                                                    <option selected="">Delivery Time</option>
                                                    <option value="30">30 MIN</option>
                                                    <option value="45">45 MIN</option>
                                                    <option value="60">60 MIN</option>
                                                    <option value="12hr">12 HR</option>
                                                    <option value="24hr">24 HR</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col-sm-6">
                                                <div class="row">
                                                    <div class="col-sm-12"><label>Operating Hours ( Morning / Afternoon
                                                            )</label></div>
                                                    <div class="col-sm-6">
                                                        <input type="email" placeholder="Start Time 08:30"
                                                               class="form-control txt_wizard required">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="email" placeholder="End Time 04:30"
                                                               class="form-control txt_wizard required">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="row">
                                                    <div class="col-sm-12"><label>Operating Hours ( NIght / Evening
                                                            )</label></div>
                                                    <div class="col-sm-6">
                                                        <input type="email" placeholder="Start Time 06:00"
                                                               class="form-control txt_wizard required">
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <input type="email" placeholder="End Time 10:30"
                                                               class="form-control txt_wizard required">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sm-12">
                                                <div class="single_rowoption">
                                                    <div class="operating_txt"> Operating Days</div>
                                                    <div class="operating_days_check">
                                                        <div class="checkbox"><label>
                                                                <input type="checkbox" name="checkboxChild" value="8">
                                                                <span class="cr"><i
                                                                            class="cr-icon mdi mdi-check"></i></span>
                                                                <div class="check_txt">Sun</div>
                                                            </label></div>
                                                    </div>
                                                    <div class="operating_days_check">
                                                        <div class="checkbox"><label>
                                                                <input type="checkbox" name="checkboxChild" value="8">
                                                                <span class="cr"><i
                                                                            class="cr-icon mdi mdi-check"></i></span>
                                                                <div class="check_txt">Mon</div>
                                                            </label></div>
                                                    </div>
                                                    <div class="operating_days_check">
                                                        <div class="checkbox"><label>
                                                                <input type="checkbox" name="checkboxChild" value="8">
                                                                <span class="cr"><i
                                                                            class="cr-icon mdi mdi-check"></i></span>
                                                                <div class="check_txt">Tue</div>
                                                            </label></div>
                                                    </div>
                                                    <div class="operating_days_check">
                                                        <div class="checkbox"><label>
                                                                <input type="checkbox" name="checkboxChild" value="8">
                                                                <span class="cr"><i
                                                                            class="cr-icon mdi mdi-check"></i></span>
                                                                <div class="check_txt">Wed</div>
                                                            </label></div>
                                                    </div>
                                                    <div class="operating_days_check">
                                                        <div class="checkbox"><label>
                                                                <input type="checkbox" name="checkboxChild" value="8">
                                                                <span class="cr"><i
                                                                            class="cr-icon mdi mdi-check"></i></span>
                                                                <div class="check_txt">Thu</div>
                                                            </label></div>
                                                    </div>
                                                    <div class="operating_days_check">
                                                        <div class="checkbox"><label>
                                                                <input type="checkbox" name="checkboxChild" value="8">
                                                                <span class="cr"><i
                                                                            class="cr-icon mdi mdi-check"></i></span>
                                                                <div class="check_txt">Fri</div>
                                                            </label></div>
                                                    </div>
                                                    <div class="operating_days_check">
                                                        <div class="checkbox"><label>
                                                                <input type="checkbox" name="checkboxChild" value="8">
                                                                <span class="cr"><i
                                                                            class="cr-icon mdi mdi-check"></i></span>
                                                                <div class="check_txt">Sat</div>
                                                            </label></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-wizard-buttons">
                                            <button type="button" class="btn btn-previous">Previous</button>
                                            <button type="button" class="btn btn-next">Next</button>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <!-- Progress Bar -->
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped active" role="progressbar"
                                                 aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"
                                                 style="width: 75%">
                                            </div>
                                        </div>
                                        <!--  <div style="clear:both;"></div>
                                        <h4>Profile Image: <span>Step 3 - 4</span></h4>
                                          <div class="form-group image-upload">
                                              <div class="setting image_picker">
                                                  <br/>
                                                  <h3 class="text-center">Upload Profile Image</h3>
                                                  <div class="settings_wrap">
                                                      <label class="drop_target">
                                                          <div class="image_preview"></div>
                                                          <input id="inputFile2" type="file"/>
                                                      </label>
                                                      <div class="settings_actions vertical"><a class="disabled"
                                                                                                data-action="remove_current_image"><i
                                                              class="fa fa-trash" aria-hidden="true"></i> Remove Image</a>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox"> Yes, show this image on my profile.
                                              </label>
                                          </div>-->
                                        <div class="form-group image-upload row">
                                            <div class="col-sm-6">
                                                <div class="setting image_picker">
                                                    <h3 class="text-center">Upload Restuarent Image</h3>
                                                    <div class="settings_wrap">
                                                        <label class="drop_target ">
                                                            <div class="image_preview"></div>
                                                            <input id="inputFile" type="file">
                                                        </label>
                                                        <div class="settings_actions vertical">
                                                            <a class="disabled" data-action="remove_current_image"><i
                                                                        class="fa fa-trash" aria-hidden="true"></i>
                                                                Remove Image</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <h3>Available Cusinis</h3>
                                                <div class="cuisin_containner style-scroll" id="cuisin_containner">
                                                    <div class="cusion_row">
                                                        <input type="name" placeholder="Cusinis Name"
                                                               class="form-control txt_wizard">
                                                        <button type="submit" class="cusion_btnadd"
                                                                onclick="AddMoreCuisin(this);">
                                                            <i class="mdi mdi-plus"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-wizard-buttons">
                                            <button type="button" class="btn btn-previous">Previous</button>
                                            <button type="button" class="btn btn-next">Next</button>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <!-- Progress Bar -->
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped active" role="progressbar"
                                                 aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"
                                                 style="width: 100%">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sm-6">
                                                <input type="name" placeholder="PAN / TAN Number"
                                                       class="form-control txt_wizard required"/>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="email" placeholder="FSSAI Certificate No."
                                                       class="form-control txt_wizard required"/>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sm-6">
                                                <input type="name" placeholder="GSTIN No."
                                                       class="form-control txt_wizard required">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="name" placeholder="GST %"
                                                       class="form-control txt_wizard required">
                                            </div>
                                        </div>
                                        <div class="form-group image-upload row">
                                            <div class="col-sm-6">
                                                <div class="attech_document_row">
                                                    <div class="checkbox"><label>
                                                            <input type="checkbox" name="checkboxChild" value="8">
                                                            <span class="cr"><i
                                                                        class="cr-icon mdi mdi-check"></i></span>
                                                            <div class="check_txt">Proof of Owner Identity</div>
                                                        </label></div>
                                                </div>
                                                <div class="attech_document_row">
                                                    <div class="checkbox"><label>
                                                            <input type="checkbox" name="checkboxChild" value="8">
                                                            <span class="cr"><i
                                                                        class="cr-icon mdi mdi-check"></i></span>
                                                            <div class="check_txt">Proof of Outlet Address</div>
                                                        </label></div>
                                                </div>
                                                <div class="attech_document_row">
                                                    <div class="checkbox"><label>
                                                            <input type="checkbox" name="checkboxChild" value="8">
                                                            <span class="cr"><i
                                                                        class="cr-icon mdi mdi-check"></i></span>
                                                            <div class="check_txt">Three Photos of Outlet</div>
                                                        </label></div>
                                                </div>
                                                <div class="attech_document_row">
                                                    <div class="checkbox"><label>
                                                            <input type="checkbox" name="checkboxChild" value="8">
                                                            <span class="cr"><i
                                                                        class="cr-icon mdi mdi-check"></i></span>
                                                            <div class="check_txt">Copy Of Menu</div>
                                                        </label></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="attech_document_row">
                                                    <div class="checkbox"><label>
                                                            <input type="checkbox" name="checkboxChild" value="8">
                                                            <span class="cr"><i
                                                                        class="cr-icon mdi mdi-check"></i></span>
                                                            <div class="check_txt">Copy Of Pan / Tan</div>
                                                        </label></div>
                                                </div>
                                                <div class="attech_document_row">
                                                    <div class="checkbox"><label>
                                                            <input type="checkbox" name="checkboxChild" value="8">
                                                            <span class="cr"><i
                                                                        class="cr-icon mdi mdi-check"></i></span>
                                                            <div class="check_txt">Copy of FSSAI Certificate</div>
                                                        </label></div>
                                                </div>
                                                <div class="attech_document_row">
                                                    <div class="checkbox"><label>
                                                            <input type="checkbox" name="checkboxChild" value="8">
                                                            <span class="cr"><i
                                                                        class="cr-icon mdi mdi-check"></i></span>
                                                            <div class="check_txt">Copy of Invoice Proof</div>
                                                        </label></div>
                                                </div>
                                                <div class="attech_document_row">
                                                    <div class="checkbox"><label>
                                                            <input type="checkbox" name="checkboxChild" value="8">
                                                            <span class="cr"><i
                                                                        class="cr-icon mdi mdi-check"></i></span>
                                                            <div class="check_txt">Copy Of Bank Account</div>
                                                        </label></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-wizard-buttons">
                                            <button type="button" class="btn btn-previous">Previous</button>
                                            <button type="submit" class="btn btn-submit">Done</button>
                                        </div>
                                    </fieldset>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
@stop