Feature: Category management
  As administrator
  I need to be able to edit category entity

  Background:
    Given I add "Accept" header equal to "application/json"

  Scenario: I can see some categories
    Given the following categories exist:
      | type | name          | parent |
      | 1    | category_name |        |
      | 3    | category_edit |        |
    When I send a GET request to "/admin/category/index"
    Then the response status code should be 200

  Scenario: I can create a category
    When I send a POST request to "/admin/category/create" with parameters:
      | key                  | value      |
      | app_category[parent] |            |
      | app_category[type]   | 1          |
      | app_category[name]   | name1 Test |
    Then the response status code should be 201

  Scenario: I can edit existing category
    Given the following categories exist:
      | type | name        | parent |
      | 1    | cat1        |        |
      | 1    | name_parent |        |
    Then I send a POST request to "/admin/category/1/edit" with parameters:
      | key                  | value      |
      | app_category[parent] |            |
      | app_category[type]   | 2          |
      | app_category[name]   | name1 edit |
    Then the response status code should be 201