import "./bootstrap";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

import { Select, Datetimepicker, Datepicker, Input, Modal, Ripple, Chart, initTE } from "tw-elements";

initTE({ Select, Datetimepicker, Datepicker, Input, Modal, Ripple, Chart });

// const pickerTimeOptions = document.querySelector("#start-datetimepicker");
// new Datetimepicker(pickerTimeOptions, {
//     timepicker: { format24: true },
// });


// const datetimepickerElements = document.querySelectorAll(".datetimepicker");
// datetimepickerElements.forEach((element) => {
//     // console.log({element})
//     new Datetimepicker(element, {
//         datepicker: {
//             format: "yyyy-mm-dd",
//         },
//         timepicker: {
//             format24: true,
//         },
//     });
// });
