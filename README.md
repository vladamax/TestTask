Implement login page with two step authentication and error handling

* Login form with email and password fields and submit button

* User should be able to submit the form using "Sign in" button or by hitting Enter key on the keyboard

* Form submission should be available only when the form is filled and the user provides valid email (valid in terms of format, not existing user account)

* Validation errors should be shown on the screen

* Login failure should be presented to the user as a snackbar/notification

* After successful email / password authentication the user should provide OTP/TOTP code for two-factor authentication if backend decides

* After successful two-step authentication the user should be logged in and redirected to home page

* The user should remain logged in when the app is reloaded

Backend should contain login endpoint that will return acknowledge that user provided correct credentials. There should be two users hardcoded into backend, and one of them should have OTP enabled. Implementation for OTP is not necessary, and can accept 111111 all the time.

You may use framework of your choice or pure PHP - as you wish.

Frontend part is not important, focus on the API.
