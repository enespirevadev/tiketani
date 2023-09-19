import "./bootstrap";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

import { Datetimepicker, Input, initTE } from "tw-elements";

initTE({ Datetimepicker, Input });

const datetimepickerElements = document.querySelectorAll(".datetimepicker");
datetimepickerElements.forEach((element) => {
    new Datetimepicker(element, {
        datepicker: {
            format: "yyyy-mm-dd",
        },
        timepicker: {
            format24: true,
        },
    });
});
