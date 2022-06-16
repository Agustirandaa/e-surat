const btnNext = document.querySelectorAll(".btn-next");
const textInput = document.querySelectorAll('.text-input');

let formStepsNum = 0;
btnNext.forEach((btn) => {
    btn.addEventListener('click', (e) => {
// Cek Validasi
        if ( validationNext() ){
            formStepsNum++;
            alertValidation();
            updateFormSteps();
            updateProgressbar();
        }else{
            alertValidation();
            e.preventDefault();
        }
    })
});

// Function btn preview
const btnPreview = document.querySelector('.btn-preview');
const btnPrint = document.querySelector('.btn-print');
btnPreview.addEventListener('click', () => {
    if(validationPreview()) {
        alertValidation();
        btnPrint.style.visibility = 'visible';
    }else{
        btnPrint.style.visibility = 'hidden';
        alertValidation();
    }
});

// Function Btn previous
const btnPrev = document.querySelectorAll(".btn-prev");
btnPrev.forEach((btn) => {
    btn.addEventListener('click', () => {
        formStepsNum--;
        updateFormSteps();
        updateProgressbar();
    });
});



// KUMPULAN FUNCTION

// Function Form steps
const formSteps = document.querySelectorAll(".form-step");
function updateFormSteps() {
    formSteps.forEach((formStep) => {
        formStep.classList.contains("form-step-active") &&
        formStep.classList.remove("form-step-active");
    });
    formSteps[formStepsNum].classList.add("form-step-active");
}

// Function Step progress form
const progress = document.getElementById("progres");
const progressSteps = document.querySelectorAll(".progres-step");
function updateProgressbar() {
  progressSteps.forEach((progressStep, idx) => {
    if (idx < formStepsNum + 1) {
      progressStep.classList.add("progres-step-active");
    } else {
      progressStep.classList.remove("progres-step-active");
    }
  });

  const progressActive = document.querySelectorAll(".progres-step-active");

  progress.style.width =
    ((progressActive.length - 1) / (progressSteps.length - 1)) * 100 + "%";
}





// Function Validation form steps btn Next
function validationNext() {
    const judulSurat = document.getElementById('judulsurat').value;
    const nomorSurat = document.getElementById('nomorsurat').value;
    const lampiran = document.getElementById('lampiran').value;
    const perihal = document.getElementById('perihal').value;
    const tanggalsurat = document.getElementById('tanggalsurat').value;
    const tujuansurat = document.getElementById('tujuansurat').value;
    const haritanggal = document.getElementById('haritanggal').value;
    const waktu = document.getElementById('waktu').value;
    const via = document.getElementById('via').value;

    if ( judulSurat != '' && nomorSurat != '' && lampiran != '' && perihal != '' && tanggalsurat != '' && tujuansurat != '' && haritanggal != '' && waktu != '' && via != '') {
        return true;
    }
}

// Function Validation form steps btn preview
function validationPreview() {
    const ketuaPanitia = document.getElementById('ketuapanitia').value;
    const nimKetua = document.getElementById('nimketua').value;
    const sekPanitia = document.getElementById('sekpanitia').value;
    const nimsek = document.getElementById('nimsek').value;
    const kahim = document.getElementById('kahim').value;
    const nimKahim = document.getElementById('nimkahim').value;
    const isiSurat = document.getElementById('isisurat').value;
    if ( ketuaPanitia != '' && nimKetua != '' && sekPanitia != '' && nimsek != '' && kahim != '' && nimKahim != ''&& isiSurat != '') {
        return true;
    }
}
// Alert Validation
function alertValidation(){
    const fieldInput = document.querySelectorAll('.field-input');
    const alertInputDanger = document.querySelectorAll('.alert-input-danger');
    const alertInputSuccess = document.querySelectorAll('.alert-input-success');
    for(let i = 0; i < fieldInput.length; i++) {
        // Jika value input ada        
        if ( textInput[i].value != '' ){
            alertInputSuccess[i].style.display = 'block';
            alertInputDanger[i].style.display = 'none';
            fieldInput[i].style.border = '1px solid green';
            alertInputDanger[i].style.color = 'green';
        }
        // Jika value input kosong
        if( textInput[i].value == '' || textInput[i].value == ' '|| textInput[i].value == '  ') {
            alertInputDanger[i].style.display = 'block';
            alertInputSuccess[i].style.display = 'none';
            fieldInput[i].style.border = '1px solid red';
            alertInputDanger[i].style.color = 'red';
        }
    }
}

// Jquery
$(document).ready(function () {

    if($('#judulsurat-val').val('') && $('#nomorsurat-val').val('') && $('#lampiran-val').val('') && $('#perihal-val').val('') && $('#tujuansurat-val').val('') && $('#tanggalsurat-val').val('') && $('#isisurat-val').val('') && $('#haritanggal-val').val('') && $('#waktu-val').val('') && $('#via-val').val('') && $('#ketuapanitia-val').val('') && $('#nimketua-val').val('') && $('#sekpanitia-val').val('') && $('#nimsek-val').val('') && $('#kahim-val').val('') && $('#nimkahim-val').val('')) {

       $('.value-text').text("Warning : Undefined Input").css({'color': 'red'});
       $('.value-text-judul').text("Warning : Undefined Input").css({'color': 'red'});
       
    }

    $('#judulsurat').keyup(function(){
        $('#judulsurat-val').text($(this).val()).css({'color':'black'});
    });
    $('#nomorsurat').keyup(function(){
        $('#nomorsurat-val').text($(this).val()).css({'color':'black'});
    });
    $('#lampiran').keyup(function(){
        $('#lampiran-val').text($(this).val()).css({'color':'black'});
    });
    $('#perihal').keyup(function(){
        $('#perihal-val').text($(this).val()).css({'color':'black'});
    });
    $('#tujuansurat').keyup(function(){
        $('#tujuansurat-val').text($(this).val()).css({'color':'black'});
    });
    $('#tanggalsurat').keyup(function(){
        $('#tanggalsurat-val').text($(this).val()).css({'color':'black'});
    });
    $('#isisurat').keyup(function(){
        $('#isisurat-val').text($(this).val()).css({'color':'black'});
    });
    $('#haritanggal').keyup(function(){
        $('#haritanggal-val').text($(this).val()).css({'color':'black'});
    });
    $('#waktu').keyup(function(){
        $('#waktu-val').text($(this).val()).css({'color':'black'});
    });
    $('#via').keyup(function(){
        $('#via-val').text($(this).val()).css({'color':'black'});
    });
    $('#ketuapanitia').keyup(function(){
        $('#ketuapanitia-val').text($(this).val()).css({'color':'black'});
    });
    $('#nimketua').keyup(function(){
        $('#nimketua-val').text($(this).val()).css({'color':'black'});
    });
    $('#sekpanitia').keyup(function(){
        $('#sekpanitia-val').text($(this).val()).css({'color':'black'});
    });
    $('#nimsek').keyup(function(){
        $('#nimsek-val').text($(this).val()).css({'color':'black'});
    });
    $('#kahim').keyup(function(){
        $('#kahim-val').text($(this).val()).css({'color':'black'});
    });
    $('#nimkahim').keyup(function(){
        $('#nimkahim-val').text($(this).val()).css({'color':'black'});
    });

});




// Script untuk tidak bisa enter saat input data form
window.addEventListener('keydown', function(e) {
    if (e.keyIdentifier == 'U+000A' || e.keyIdentifier == 'Enter' || e.keyCode == 13) {
        if (e.target.nodeName == 'INPUT' && e.target.type == 'text') {
            e.preventDefault();
            return false;
        }
    }
}, true);