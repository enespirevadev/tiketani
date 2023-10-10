import "./bootstrap";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

import { Select, Datetimepicker, Input, Modal, Ripple, initTE } from "tw-elements";

initTE({ Select, Datetimepicker, Input, Modal, Ripple });
