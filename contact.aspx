<%@ Page Title="" Language="C#" MasterPageFile="~/MasterPage.master" AutoEventWireup="true" CodeFile="contact.aspx.cs" Inherits="_Default" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server"> 
  <link href="style/css/pages/contactus.css" rel="stylesheet" />

</asp:Content>


<asp:Content ID="Content2" ContentPlaceHolderID="mainContainer" Runat="Server">



<section class="map-container top-container">

    <div class="mid-container clearfix">

        <div class="col-xs-12"> <div id="map"></div></div>
        

    </div>

</section>
<%--    AIzaSyDozcm4BObnYJBHVQFZiIFgYgDcTQwADfI--%>



    <section class="contact-us">
        <div class="mid-container clearfix">
            <div class="col-xs-12  col-sm-3 text-container">
              
                <div>
                 <img src="images/logo.png" width="200" height="61"/>
                </div>

                 <h4 class="heading"> Address</h4>
                <p class="para">Office 2602, Business Bay, Dubai</p>

                  <h4 class="heading">Phone & Fax</h4>
                <p class="para">Tel : +971 52 4474 455</p>

                  <h4 class="heading">Email</h4>
                <p class="para">info@appello.ae</p>
          
                  </div>


            <div class="col-xs-12  col-sm-9 contact-us-form">

                <h2 class="heading">
                    Contact Us
                </h2>
                <p class="para">Want to know more about our services? Fill out the form below and a representative will contact you within 3 business days to discuss your enquiry. Alternatively, you can give us a ring Monday through Friday, 9:00 am to 6:00 pm on +92 21 34970226.</p>


                <div class="col-xs-6 form-group ">
                    <input type="text" class="form-control" placeholder="*First Name"/>
                </div>
                 <div class="col-xs-6 form-group ">
                    <input type="text"  class="form-control"  placeholder="*First Name"/>
                </div>

                 <div class="col-xs-6 form-group ">
                    <input type="text "  class="form-control"  placeholder="*First Name"/>
                </div>

                 <div class="col-xs-6 form-group ">
                    <input type="text"  class="form-control" placeholder="*First Name"/>
                </div>

                 <div class="col-xs-6 form-group ">
                    <input type="text"  class="form-control" placeholder="*First Name"/>
                </div>

                 <div class="col-xs-6 form-group ">
                    <input type="text"  class="form-control" placeholder="*First Name"/>
                </div>

                 <div class="col-xs-12 form-group ">
                  <textarea rows="5" title="message" placeholder="Message:"  class="form-control"></textarea>
                </div>

            </div>

        </div>
    </section>
</asp:Content>


<asp:Content ID="Content3" ContentPlaceHolderID="javascript" Runat="Server">
 <script>
     function initMap() {
         var uluru = { lat: 25.1898224, lng: 55.2826905 };
         var map = new google.maps.Map(document.getElementById('map'), {
             zoom: 14,
             center: uluru
         });
         var marker = new google.maps.Marker({
             position: uluru,
             map: map
         });
     }
    </script>

<%--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDozcm4BObnYJBHVQFZiIFgYgDcTQwADfI&callback=myMap"></script>--%>

     <script async defer    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDozcm4BObnYJBHVQFZiIFgYgDcTQwADfI&callback=initMap">
    </script>
</asp:Content>


