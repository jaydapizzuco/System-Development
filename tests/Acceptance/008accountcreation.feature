Feature: accountcreation

As an unauthenticated user, 
I want to be able to create an account so that I access authenticated user content.

Scenario: accountcreation
	Given I am on “/User/login/”
	And I click “Register” 
	When my email is “test@email.com”
	And my name is "John Doe"
	And my password is “test123”
	And I click the Registration button 
	And I am redirected to “/User/login/”
