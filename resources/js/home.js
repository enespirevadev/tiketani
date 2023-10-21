import "./bootstrap";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

import {
    Select,
    Datetimepicker,
    Datepicker,
    Input,
    Modal,
    Ripple,
    initTE,
} from "tw-elements";

initTE({ Select, Datetimepicker,Datepicker, Input, Modal, Ripple });

const checkoutModal = document.getElementById("checkoutModal");
checkoutModal.addEventListener("show.te.modal", (e) => {
    // Button that triggered the modal
    const button = e.relatedTarget;
    // Extract info from data-te-* attributes
    const eventId = button.getAttribute("data-te-event");

    const checkoutContainer = checkoutModal.querySelector(
        "[data-te-modal-body-ref] div"
    );

    fetch("/checkout/" + eventId, {
        method: "GET",
        headers: { "Content-Type": "text/html" },
    })
        .then((response) => response.text())
        .then((body) => {
            checkoutContainer.innerHTML = body;
        })
        .catch((error) => {
            console.error(error);
            checkoutContainer.innerHTML = "Ooops! Something went wrong!";
        });
});


function checkout(eventId) {
    // e.preventDefault();

    alert("Success !!");

    // fetch("/checkout/" + eventId, {
    //     method: "POST",
    //     // headers: { "Content-Type": "application/html" },
    //     body: ''
    // })
    //     .then((response) => response.text())
    //     .then((body) => {
    //         checkoutContainer.innerHTML = body;
    //     })
    //     .catch((error) => {
    //         console.error(error);
    //         checkoutContainer.innerHTML = "Ooops! Something went wrong!";
    //     });
}
