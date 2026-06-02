 
		$(document).ready(function () {
			//onchange of rooms-count
			$('#basics-select-bedrooms').change(function () {
				var roomsSelected = $('#basics-select-bedrooms option:selected').val();
				var roomsDisplayed = $('[id^="room-"]:visible').length;
				var roomsRendered = $('[id^="room-"]').length;

				//if room count is greater than number displayed - add or show accordingly
				if (roomsSelected > roomsDisplayed) {
					for (var i = 1; i <= roomsSelected; i++) {
						var r = $('#room-' + i);
						if (r.length == 0) {
							var clone = $('#room-1').clone(); //clone
							clone.children(':first').text("Bedroom: " + i);

							//change ids appropriately
							setNewID(clone, i);
							clone.children('div').children('select').each(function () {
								setNewID($(this), i);
							});

							$(clone).insertAfter($('#room-' + roomsRendered));
							$('#room-' + i + ' #bedroom_no').val(i);
							$('#room-' + i + ' #fid').val('');
							$('#room-' + i + ' #bedtype_number').val('');

							$('#room-' + i + ' .edit_beds').attr('data-id', i);
							$('#room-' + i + ' .edit_beds').attr("id", 'edit-beds-' + i);
							$('#room-' + i + ' .sub_div').attr("id", 'sub-div-' + i);
							$('#room-' + i + ' .total_beds').attr("id", 'total-beds-' + i);
							$('#room-' + i + ' .edit_beds').html('Add Beds');

							$('#main #total-beds-' + i).empty();
							$('#main #total-beds-' + i).append('<p class="">0 Beds</p>');

							$('#room-' + i + ' .sub_div').hide();
						} else {
							//if the room exists and is hidden 
							$(r).show();
						}
					}
				} else {
					//else if less than room count selected - hide
					for (var i = ++roomsSelected; i <= roomsRendered; i++) {
						//$('#room-' + i).hide();
						$('#room-' + i).remove();

						$.ajax({
							type: 'post',
							url: 'firstpointcreations.com/deletebedroom',
							data: {
								bid: i,
								property_id: '74',
								'_token': '5CAXtj51mgt7FnmPZ4hxGHkrJywL401895qUnutw'
							},
							success: function (data) {
							}
						});

					}
				}

				var main = document.getElementById('main');
				[].map.call(main.children, Object).sort(function (a, b) {
					return +a.id.match(/\d+/) - +b.id.match(/\d+/);
				}).forEach(function (elem) {
					main.appendChild(elem);
				});


			});

			function setNewID(elem, i) {
				oldID = elem.attr('id');
				newId = oldID.substring(0, oldID.indexOf('-')) + "-" + i;
				elem.attr('id', newId);
			}

		});

	$(document).on('click', '#main div[id^="edit-beds-"]', function () {
    var id = $(this).attr('data-id');
    var $subDiv = $('#sub-div-' + id);
    var $editBtn = $('#edit-beds-' + id);
    var $totalBeds = $('#main #total-beds-' + id);

    $subDiv.toggleClass('active').toggle('fade');

    if ($subDiv.hasClass('active')) {
        $editBtn.html('Done');
    } else {
        $totalBeds.empty();
        $editBtn.html('Edit Beds');

        $subDiv.find('.form-group').each(function () {
            var $group = $(this);
            var bedName = $group.find('input[id="bedname"]').val();
            var selected = $group.find('input[type="radio"]:checked').val();

            if (selected === '1' || selected === '0') {
                var answer = (selected === '1') ? 'Yes' : 'No';
                $totalBeds.append('<p class="sv_bedtype_number">' + bedName + ': ' + answer + '</p>');
            }
        });
    }
});