var Simulator = function () {
    var self = this;
    self.courseTypes = new Array("Normal", "Small", "Online")
    self.init = function () {
        self.swapCourse("Normal");
        $(".simulators").find("input").change(function () {

            if ($("#smallCourse9").prop("checked")) {
                $("#smallCB2").prop("checked", false);
                $("#smallCB2").prop("disabled", true);
            } else {
                $("#smallCB2").prop("disabled", false);
            }
            self.onChange(this);
        });
    }

    self.onChange = function (target) {
        //console.log($("#simulatorNormal").find("input[name=courseFee]:checked").val());
        //console.log(target);
        for (var i = 0; i < self.courseTypes.length; i++) {
            self.sum(self.courseTypes[i]);
        }
        if ($(target).attr("name") == "onlineCourseHeader") {
            self.showOndemandCourseDetail($(target).val());
        }
    }

    self.showOndemandCourseDetail = function (n) {
        //$(".ondemandDetail").css("display","none");
        //$("#ondemandDetail" + n).css("display","block");
        $(".ondemandDetail").addClass("height0");
        $("#ondemandDetail" + n).removeClass("height0");
    }

    self.sum = function (courseType) {
        var payment = 0;
        var courseFee = $("#simulator" + courseType).find("input[rel=courseFee]:checked").val();
        if (typeof courseFee != "undefined") {
            courseFee = parseInt(courseFee);
            $("#simulator" + courseType).find(".courseFeeAmount").html(courseFee.toLocaleString() + "円");
            payment += courseFee;
        }
        //青本代
        if (courseType == "Online") {
            let aohondai = parseInt($("#simulator" + courseType).find("input[rel=courseFee]:checked").attr("aohon"));
            //console.log(aohondai);
            if (!isNaN(aohondai)) {
                $(".aohondai span").html(aohondai.toLocaleString());
                payment += aohondai;
            }
        }
        var waribikiTotal = 0;
        var waribikiA = $("#simulator" + courseType).find("input[rel=waribikiA]:checked").val();
        if (typeof waribikiA != "undefined") {
            waribikiA = parseInt(waribikiA);
            waribikiTotal += waribikiA;
        }
        var waribikiB = $("#simulator" + courseType).find("input[rel=waribikiB]:checked").val();
        if (typeof waribikiB != "undefined") {
            waribikiB = parseInt(waribikiB);
            waribikiTotal += waribikiB;
        }
        $("#simulator" + courseType).find(".waribikiTotalAmount").html(waribikiTotal.toLocaleString() + "円");

        payment += waribikiTotal;
        $("#simulator" + courseType).find(".paymentAmount").html(payment.toLocaleString() + "円(税込)");

        var cacheBack = 0;
        $("#simulator" + courseType).find("input[rel=cb]:checked").each(function () {
            cacheBack += parseInt($(this).val());
        });

        $("#simulator" + courseType).find(".cacheBackAmount").html(cacheBack.toLocaleString() + "円");

        var finalAmount = payment - cacheBack;
        $("#simulator" + courseType).find(".finalAmount").html(finalAmount.toLocaleString() + "円(税込)");
    }

    self.swapCourse = function (targetCourse) {
        for (var i = 0; i < self.courseTypes.length; i++) {
            $("#simulator" + self.courseTypes[i]).css("display", "none");
        }
        $("#simulator" + targetCourse).css("display", "block");
    }
}
var simulator = new Simulator();
simulator.init();