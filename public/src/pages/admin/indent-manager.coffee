Checkbox = require './../../common/checkbox/checkbox.coffee'

checkbox = (new Checkbox({
    selector: '.checkbox-wrapper'
    data: ["acceptance", "finishConfirmed", "addPriceOrDelay", "publishSuccess", "publishFail", "nearDeadline"]
}))



