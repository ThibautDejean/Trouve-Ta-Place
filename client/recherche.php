<!DOCTYPE html>
<!--
 @license
 Copyright 2019 Google LLC. All Rights Reserved.
 SPDX-License-Identifier: Apache-2.0
-->
<html>
  <head>
    <title>Place Autocomplete Address Form</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:400,500"
      rel="stylesheet"
    />

    <link rel="stylesheet" type="text/css" href="styles/recherche.css" />
    <script type="module" src="recherche.ts"></script>
  </head>
  <body>
    <!-- Note: The address components in this sample are based on North American address format. You might need to adjust them for the locations relevant to your app. For more information, see
https://developers.google.com/maps/documentation/javascript/examples/places-autocomplete-addressform
    -->

    <form id="address-form" action="" method="get" autocomplete="off">
      <p class="title">Sample address form for North America</p>
      <p class="note"><em>* = required field</em></p>
      <label class="full-field">
        <!-- Avoid the word "address" in id, name, or label text to avoid browser autofill from conflicting with Place Autocomplete. Star or comment bug https://crbug.com/587466 to request Chromium to honor autocomplete="off" attribute. -->
        <span class="form-label">Deliver to*</span>
        <input
          id="ship-address"
          name="ship-address"
          required
          autocomplete="off"
        />
      </label>
      <label class="full-field">
        <span class="form-label">Apartment, unit, suite, or floor #</span>
        <input id="address2" name="address2" />
      </label>
      <label class="full-field">
        <span class="form-label">City*</span>
        <input id="locality" name="locality" required />
      </label>
      <label class="slim-field-left">
        <span class="form-label">State/Province*</span>
        <input id="state" name="state" required />
      </label>
      <label class="slim-field-right" for="postal_code">
        <span class="form-label">Postal code*</span>
        <input id="postcode" name="postcode" required />
      </label>
      <label class="full-field">
        <span class="form-label">Country/Region*</span>
        <input id="country" name="country" required />
      </label>
      <button type="button" class="my-button">Save address</button>

      <!-- Reset button provided for development testing convenience.
  Not recommended for user-facing forms due to risk of mis-click when aiming for Submit button. -->
      <input type="reset" value="Clear form" />
    </form>

    <!-- 
     The `defer` attribute causes the callback to execute after the full HTML
     document has been parsed. For non-blocking uses, avoiding race conditions,
     and consistent behavior across browsers, consider loading using Promises
     with https://www.npmjs.com/package/@googlemaps/js-api-loader.
    -->
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&callback=initAutocomplete&libraries=places&v=weekly"
      defer
    ></script>
  </body>
</html>
