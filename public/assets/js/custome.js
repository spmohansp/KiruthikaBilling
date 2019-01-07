$(document).ready(function () {
    $('.CalculateValues').on('keyup change', function () {

        var FREIGHT = $('#FREIGHT').val();
        var HEIGHT_CASE = $('#HEIGHT_CASE').val();
        var HOLTING = $('#HOLTING').val();
        var UNLOADING_CHARGES = $('#UNLOADING_CHARGES').val();
        var ADVANCE = $('#ADVANCE').val();

        if(FREIGHT == ''){ FREIGHT = 0;  }
        if(HEIGHT_CASE == ''){ HEIGHT_CASE = 0;  }
        if(HOLTING == ''){ HOLTING = 0;  }
        if(UNLOADING_CHARGES == ''){ UNLOADING_CHARGES = 0;  }
        if(ADVANCE == ''){ ADVANCE = 0;  }

        $('#TOTAL').val(parseFloat(FREIGHT) + parseFloat(HEIGHT_CASE) + parseFloat(HOLTING) + parseFloat(UNLOADING_CHARGES));
       $('#PENDING').val((parseFloat(FREIGHT) + parseFloat(HEIGHT_CASE) + parseFloat(HOLTING) + parseFloat(UNLOADING_CHARGES))-parseFloat(ADVANCE));

    });

});