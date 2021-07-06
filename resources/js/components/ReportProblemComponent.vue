import showCanvasComponent from "./showRoomComponent.js";

<template>
    <div style="margin-left:auto;margin-right:auto;">
        Click the button below to begin a problem report!
        <br/>
        <button v-on:click="create_report" id="create_report" class="clickable" name="create_report" >Report a problem to customer support</button>
    </div>
</template>

<script>


export default {
    methods: {
        create_report (event){
                    var body = "Dear Support ," +
                        "%0D%0A%0D%0A I would like to report a probelm I have encountered."+
                        "%0D%0A%0D%0A Severity: < Severity Here >" +
                        "%0D%0A Problem Effect: < Effect  Here >" +
                        "%0D%0A Problem Description: < Description Here >" +
                        "%0D%0A%0D%0AThank you for your help."

                    var subject = "Problem Report"

                    var href = "mailto:golde-shoe-support@email.com?"
                        + "subject=" + subject + "&"
                        + "body=" + body;

                    var wndMail;
                    wndMail = window.open(href, "_blank", "scrollbars=yes,resizable=yes,width=100,height=100");
                }
    },

}
</script>
