Feature: Menu management
  As administrator
  I need to be able to edit menu entity

  Background:
    Given I add "Accept" header equal to "application/json"
    Given the following articles exist:
      | template | title | uri   | status    | creator |
      | POST     | Test1 | /test | PUBLISHED | john    |
    Given the following categories exist:
      | type | name          | parent |
      | 3    | category_name |        |
      | 3    | category_edit |        |

  Scenario: I can get list of available menus
    Given the following menu nodes exist:
      | name      | category | label | menuNode |
      | cat test  | 1        | test  | 2        |
    When I send a GET request to "/admin/menu/index"
    And the response status code should be 200
    And entity Menu Node should have 4 fields

  Scenario: I can rearrange some nodes in menu
    Given the following menu nodes exist:
      | name       | category | label | menuNode |
      | cat test 1 | 1        | test  | 2        |
      | cat test 2 | 2        | test  | 2        |
    When I send a POST request to "/admin/menu/2/rearrange" with parameters:
      | key                       | value |
      | menu[0][id]               | 4     |
      | menu[0][children][0][id]  | 5     |
    Then the response status code should be 200
    And entity Menu Node #5 should have parentId in 4
    And entity Menu Node should have 5 fields

  Scenario: I can turn off display
    Given the following menu nodes exist:
      | name       | article  | label | menuNode |
      | cat test 1 | 1        | test  | 2        |
    When I send a POST request to "/admin/menu/4/display/0"
    And entity "RiverwayCmsCoreBundle:MenuNode" #4 should have display in 0

  Scenario: I can add some category new menu node
    And the following menu nodes exist:
      | name    | article | category_id |
      | article | 1       |             |
    When I send a POST request to "/admin/category/1/2/add-to-menu"
    And the response status code should be 201
    And entity "RiverwayCmsCoreBundle:MenuNode" #5 should have name in "main category #1"
    And entity "RiverwayCmsCoreBundle:MenuNode" #5 should have label in "category_name"
    And entity "RiverwayCmsCoreBundle:MenuNode" #5 should have category type in 3
    And entity "RiverwayCmsCoreBundle:MenuNode" #5 should have parent menu in 2

  Scenario: I can delete some category from some menu
    Given the following menu nodes exist:
      | name      | category | label | menuNode |
      | cat test  | 1        | test  | 2        |
    When I send a DELETE request to "/admin/category/1/2/remove-from-menu"
    Then the response status code should be 201
    And entity "RiverwayCmsCoreBundle:MenuNode" #4 should not exists