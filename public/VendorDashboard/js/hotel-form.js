function BookingForm() {
    const selectValue = parseInt(document.getElementById('selectInput').value, 10);
    const container = document.getElementById('formContainer');

    // Clear existing forms
    container.innerHTML = '';

    for (let i = 1; i <= selectValue; i++) {
        const formWrapper = document.createElement('div');
        formWrapper.className = 'col-lg-12';
        formWrapper.innerHTML = `
            <label class="text-label form-label">Bedrooms* (Room ${i})</label>
            <div class="final-rooms-info"><h4 id="output-${i}"></h4></div>
            <div class="accordion accordion-primary" id="accordion-${i}">
                <div class="accordion-item">
                    <div class="row">
                        <div class="col-lg-3 offset-lg-9">
                            <div class="accordion-header rounded-lg"
                                 id="heading-${i}"
                                 data-bs-toggle="collapse"
                                 data-bs-target="#collapse-${i}"
                                 aria-controls="collapse-${i}"
                                 aria-expanded="true" role="button">
                                <span class="accordion-header-icon"></span>
                                <span class="accordion-header-text">Edit Beds</span>
                            </div>
                        </div>
                    </div>
                    <div id="collapse-${i}" class="collapse" aria-labelledby="heading-${i}" data-bs-parent="#accordion-${i}">
                        <div class="accordion-body-text">
                            <div class="card">
                                <div class="card-body row">
                                    ${generateBedInputs(i)}
                                    <div class="col-lg-12">
                                        <button type="button" class="btn btn-primary"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#collapse-${i}"
                                            onclick="printInput(${i})">
                                            Done
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>`;
        container.appendChild(formWrapper);
    }
}

function generateBedInputs(roomId) {
    const bedTypes = ['King', 'Queen', 'Double', 'Single', 'Sofa bed', 'Bunk bed'];
    const bed_name = ['King', 'Queen', 'Double', 'Single', 'Sofa_bed', 'Bunk_bed'];
    let inputFields = '';
    let i = 0;
    bedTypes.forEach(type => {
        const id = `${type.replace(/\s+/g, '').toLowerCase()}-${roomId}`;
        let name = bed_name[i].toLowerCase();
        inputFields += `
            <div class="col-xl-6 mb-3 row">
                <label class="col-lg-4 col-form-label">${type} <span class="text-danger">*</span></label>
                <div class="col-lg-6">
                    <input type="number" name="${name}" class="form-control" value="1" min="0" required id="${id}">
                </div>
            </div>
        `;
        i++;
    });
    return inputFields;
}
