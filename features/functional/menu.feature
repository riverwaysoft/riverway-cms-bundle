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