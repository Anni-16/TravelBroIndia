// For Add or Remove Flight Multi City Option Start
$(document).ready(function () {
    $("#addMultiaddRoomRow").on('click', (function () {
        let a = Math.random().toString(36).replace(/[^a-z]+/g, '').substr(0, 5);

        if (document.querySelectorAll('.multi_addRoom_form').length === 500) {
            alert("Max Citry Limit Reached!!")
            return;
        }
        $(".multi_addRoom_form_wrapper").append(` 
        <div class="multi_addRoom_form">
        <div class="row"> 
            <div class="booking_tour_form">
            <h3 class="heading_theme">Room</h3>
            <div class="tour_booking_form_box" id="addMultiroomRow">
                <form action="" id="tour_bookking_form_item">
                    <div class="row">
                    <div class="multi_form_remove">
                    <button type="button"
                        id="remove_multi_addRoom"  class="btn btn_theme btn_md" > 
                        <p> 
                        <i class="fa fa-trash-o" id="add-room-remove-btn"></i></p>
                        </button>
                </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" style="padding-bottom: 5px;">Room
                                    title</label>
                                <input type="text" class="form-control bg_input"
                                    placeholder="Name of your Hotel*">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12" id="select-city">
                            <div class="form-group">
                                <label for="" style="padding-bottom: 5px;">Type /
                                    Category</label>
                                <select name="city" id="city" class="form-control">
                                    <option value="">Select</option>
                                    <option value="Gurgaon">Single room</option>
                                    <option value="Delhi">Double room</option>
                                    <option value="Apartments">Triple room</option>
                                    <option value="Hotels">Deluxe Room</option>
                                    <option value="Noida">Suite</option>
                                    <option value="Noida">
                                        Executive suite</option>
                                    <option value="Noida">Presidential Suites
                                    </option>
                                    <option value="Noida">Connecting rooms</option>
                                    <option value="Noida">Hospitality rooms</option>
                                    <option value="Noida">King room</option>
                                    <option value="Noida">Honeymoon suites</option>
                                    <option value="Noida">Bridal suites</option>
                                    <option value="Noida">
                                        Studio</option>
                                    <option value="Noida">Hollywood twin room
                                    </option>
                                    <option value="Noida">Cabana</option>
                                    <option value="Noida">Queen room</option>
                                    <option value="Noida">Single hotel rooms
                                    </option>
                                    <option value="Noida">
                                        Twin room</option>
                                    <option value="Noida">Suite rooms</option>
                                    <option value="Noida">Junior Suite</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12" id="select-city">
                                                                <div class="form-group">
                                                                    <label for="" style="padding-bottom: 5px;">Room
                                                                        Sizes</label>
                                                                    <select name="city" id="city" class="form-control">
                                                                        <option value="">Select</option>
                                                                        <option value="Gurgaon">Standard Room</option>
                                                                        <option value="Delhi">Deluxe Room</option>
                                                                        <option value="Apartments">Presidential Suites
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-6 col-lg-6 col-md-12" id="select-city">
                                                                <div class="form-group">
                                                                    <label for="" style="padding-bottom: 5px;">Bath room
                                                                        Sizes</label>
                                                                    <select name="city" id="city" class="form-control">
                                                                        <option value="">Select</option>
                                                                        <option value="Gurgaon">Small Bathroom</option>
                                                                        <option value="Delhi">Standard Bathroom</option>
                                                                        <option value="Apartments">Master Bathroom
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label for="" style="padding-bottom: 5px;">Room
                                                                        Rates </label>
                                                                    <input type="text" class="form-control bg_input"
                                                                        placeholder="$100*">
                                                                </div>
                                                            </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" style="padding-bottom: 5px;">Guest
                                </label>
                                <input type="number" class="form-control bg_input"
                                    placeholder="2">
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12" id="select-city">
                            <div class="form-group">

                                <label for="" style="padding-bottom: 5px;">
                                    Keywords</label>
                                <input type="text" class="form-control bg_input"
                                    placeholder="Maximum 15*">
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12" id="select-city">
                            <div class="form-group">
                                <label for="" style="padding-bottom: 5px;">Room
                                    Details
                                </label>
                                <textarea type="text" class="form-control bg_input"
                                    placeholder="Details of your Hotel*"
                                    id="textarea"></textarea>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-12"
                                    style="padding-bottom: 20px;">
                                    <label for=""
                                        style="padding-bottom: 5px;">Gallery
                                    </label>
                                    <label class="filelabel"> 
                                        <i class="fa fa-cloud-download" style="padding-top:50px; padding-bottom: 10px; color: #8b3eea;"></i>
                                        <div class=" title"
                                            style="font-size: 12px; color: #8b3eea;">
                                            Click here or drop file to upload
                                        </div>
                                        <input class="FileUpload1" id="FileInput"
                                            name="booking_attachment" type="file" />
                                    </label>
                                </div>

                                <div class="col-lg-12">
                                    <div class="row"
                                        style="gap: 20px 0; padding-bottom: 20px;">
                                        <label for=""
                                            style="padding-bottom: 5px;">Add
                                            Features
                                        </label>
                                        <div class="col-lg-3">
                                            <div class="header-media-radio">
                                                <input type="checkbox"
                                                    id="feature-1" checked
                                                    name="header-media"
                                                    style="margin-right: 10px; margin-left: 10px;">
                                                <label for="feature-1">
                                                    <p
                                                        style="color:#8b3eea; font-weight:500;">
                                                        Free Wifi</p>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="header-media-radio">
                                                <input type="checkbox"
                                                    id="feature-2"
                                                    name="header-media"
                                                    style="margin-right: 10px; margin-left: 10px;">
                                                <label for="feature-2">
                                                    <p
                                                        style="color:#8b3eea; font-weight:500;">
                                                        Parking
                                                    </p>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="header-media-radio">
                                                <input type="checkbox"
                                                    id="feature-3"
                                                    name="header-media"
                                                    style="margin-right: 10px; margin-left: 10px;">
                                                <label for="feature-3">
                                                    <p
                                                        style="color:#8b3eea; font-weight:500;">
                                                        Fitness Center</p>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="header-media-radio">
                                                <input type="checkbox"
                                                    id="feature-4" checked
                                                    name="header-media"
                                                    style="margin-right: 10px; margin-left: 10px;">
                                                <label for="feature-4">
                                                    <p
                                                        style="color:#8b3eea; font-weight:500;">
                                                        Free Wifi</p>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="header-media-radio">
                                                <input type="checkbox"
                                                    id="feature-5"
                                                    name="header-media"
                                                    style="margin-right: 10px; margin-left: 10px;">
                                                <label for="feature-5">
                                                    <p
                                                        style="color:#8b3eea; font-weight:500;">
                                                        Parking
                                                    </p>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="header-media-radio">
                                                <input type="checkbox"
                                                    id="feature-6"
                                                    name="header-media"
                                                    style="margin-right: 10px; margin-left: 10px;">
                                                <label for="feature-6">
                                                    <p
                                                        style="color:#8b3eea; font-weight:500;">
                                                        Fitness Center</p>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="header-media-radio">
                                                <input type="checkbox"
                                                    id="feature-7"
                                                    name="header-media"
                                                    style="margin-right: 10px; margin-left: 10px;">
                                                <label for="feature-7">
                                                    <p
                                                        style="color:#8b3eea; font-weight:500;">
                                                        Parking
                                                    </p>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="header-media-radio">
                                                <input type="checkbox"
                                                    id="feature-8"
                                                    name="header-media"
                                                    style="margin-right: 10px; margin-left: 10px;">
                                                <label for="feature-8">
                                                    <p
                                                        style="color:#8b3eea; font-weight:500;">
                                                        Fitness Center</p>
                                                </label>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
 

                    </div>
                </form>
            </div>
        </div>
        </div>

        

    </div>
        `);

    }))
    // Remove Button Click 
    $(document).on('click', (function (e) {
        if (e.target.id === "remove_multi_addRoom") {
            $(e.target).parent().closest('.multi_addRoom_form').remove()
        }
    })
        
        

    ) 
});
  
 
$(document).on('click', '.remove-row', function() {
    $(this).closest('tr').remove();
}); 