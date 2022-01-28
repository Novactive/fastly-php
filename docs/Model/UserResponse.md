# # UserResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**login** | **string** | The login associated with the user (typically, an email address). | [optional] 
**name** | **string** | The real life name of the user. | [optional] 
**limit_services** | **bool** | Indicates that the user has limited access to the customer&#39;s services. | [optional] 
**locked** | **bool** | Indicates whether the is account is locked for editing or not. | [optional] 
**require_new_password** | **bool** | Indicates if a new password is required at next login. | [optional] 
**role** | [**\Fastly\Model\RoleUser**](RoleUser.md) |  | [optional] 
**two_factor_auth_enabled** | **bool** | Indicates if 2FA is enabled on the user. | [optional] 
**two_factor_setup_required** | **bool** | Indicates if 2FA is required by the user&#39;s customer account. | [optional] 
**created_at** | **string** | Date and time in ISO 8601 format. | [optional] [readonly] 
**deleted_at** | **string** | Date and time in ISO 8601 format. | [optional] [readonly] 
**updated_at** | **string** | Date and time in ISO 8601 format. | [optional] [readonly] 
**id** | **string** | Alphanumeric string identifying the user. | [optional] [readonly] 
**email_hash** | **string** | The alphanumeric string identifying a email login. | [optional] 
**customer_id** | **string** | Alphanumeric string identifying the customer. | [optional] [readonly] 


[[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
