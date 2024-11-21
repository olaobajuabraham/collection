# # ConsentkycResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sub** | **string** | Subject - Identifier for the End-User at the Issuer. | [optional]
**name** | **string** | End-User&#39;s full name in displayable form including all name parts. | [optional]
**given_name** | **string** | Given name(s) or first name(s) of the End-User. | [optional]
**family_name** | **string** | Surname(s) or last name(s) of the End-User. | [optional]
**middle_name** | **string** | Middle name(s) of the End-User. | [optional]
**email** | **string** | End-User&#39;s preferred e-mail address. Its value MUST conform to the  RFC 5322 [RFC5322] address specification syntax. | [optional]
**email_verified** | **bool** | The response value is True if the End-User&#39;s e-mail address has been verified;otherwise false. | [optional]
**gender** | **string** | End-User&#39;s gender. | [optional]
**locale** | **string** | Preffered language. | [optional]
**phone_number** | **string** | End-User&#39;s preferred telephone number | [optional]
**phone_number_verified** | **bool** | The response value is True if the End-User&#39;s phone number has been verified; otherwise false. | [optional]
**address** | **string** | User Address | [optional]
**updated_at** | **float** | The time the End-User&#39;s information was last updated. | [optional]
**status** | **string** | Account holder status. | [optional]
**birthdate** | **string** | The birth date of the account holder. | [optional]
**credit_score** | **string** | The credit score of the account holder. | [optional]
**active** | **bool** | The status of the account holder. | [optional]
**country_of_birth** | **string** | Account holder country of birth. | [optional]
**region_of_birth** | **string** | The birth region of the account holder. | [optional]
**city_of_birth** | **string** | The city of birth for the account holder. | [optional]
**occupation** | **string** | Occupation of the account holder. | [optional]
**employer_name** | **string** | The name of the employer. | [optional]
**identification_type** | **string** | Type of identification.The first non-expired identification is always chosen. | [optional]
**identification_value** | **string** | The value of the identification. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
