@web @project_page
Feature: Projects should have an editor a custom translation can be defined

  Background:
    Given there are users:
      | id | name     |
      | 1  | Catrobat |
    And there are projects:
      | id | name      | owned by | description    | credit     |
      | 1  | project 1 | Catrobat | my description | my credits |
    And I wait 1000 milliseconds

  Scenario: Custom translation editor should be visible
    Given I log in as "Catrobat"
    And I go to "/app/project/1"
    And I wait for the page to be loaded
    And I wait 10000 milliseconds
    When I click "#edit-program-button"
    And I wait for AJAX to finish
    Then the element "#edit-name-text" should be visible
    And the element "#edit-description-text" should be visible
    And the element "#edit-credits-text" should be visible
    And the element "#edit-text-ui" should be visible
    And the element "#edit-language-selector" should be visible
    And the element "#edit-submit-button" should be visible

  Scenario: Adding a custom translation
    Given I log in as "Catrobat"
    And I go to "/app/project/1"
    And I wait for the page to be loaded
    And I wait 10000 milliseconds
    When I click "#edit-program-button"
    And I wait for AJAX to finish
    Then I choose "French" from selector "#edit-language-selector"
    And I wait for AJAX to finish
    Then I fill in "edit-name-text" with "This is a name translation"
    And I fill in "edit-description-text" with "This is a description translation"
    And I fill in "edit-credits-text" with "This is a credit translation"
    And I click "#edit-submit-button"
    And I wait for AJAX to finish
    Then I should see "project 1"
    And I should see "my description"
    And I should see "my credits"

  Scenario: Viewing a custom translation
    Given there are project custom translations:
      | project_id | language | name             | description             | credit             |
      | 1          | fr       | name translation | description translation | credit translation |
    And I log in as "Catrobat"
    And I go to "/app/project/1"
    And I wait for the page to be loaded
    And I wait 10000 milliseconds
    When I click "#edit-program-button"
    And I wait for AJAX to finish
    Then the element "#edit-credits-text" should be visible
    And the element "#edit-language-selector" should be visible
    Then I choose "French" from selector "#edit-language-selector"
    And I wait for AJAX to finish
    Then the "edit-name-text" field should contain "name translation"
    And the "edit-description-text" field should contain "description translation"
    And the "edit-credits-text" field should contain "credit translation"
