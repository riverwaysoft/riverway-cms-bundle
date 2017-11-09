Feature: Article management
  As administrator
  I need to be able to edit article entity

  Background:
    Given the following articles exist:
      | template | title | uri   | status    | creator |
      | POST     | Test1 | /test | PUBLISHED | john    |
    Given the following menu nodes exist:
      | name    | article |
      | article | 1       |
    Given the following widgets exist:
      | name                                                    | article | type   | sequence |
      | Riverway\Cms\CoreBundle\Widget\Realisation\EditorWidget | 1       | EDITOR | 1        |

    Given I add "Accept" header equal to "application/json"

  Scenario: Fetch data in html
    Given I add "Accept" header equal to "application/html"
    And I send a GET request to "/test"
    And the response status code should be 200

  Scenario: Article preview in html
    Given I add "Accept" header equal to "application/html"
    And I send a GET request to "/preview/1"
    And the response status code should be 200
#
  Scenario: Create article
    And I send a POST request to "/admin/article/create" with parameters:
      | key                   | value          |
      | app_article[title]    | Test title     |
      | app_article[template] | post.html.twig |
    And the response status code should be 201
    And entity "RiverwayCmsCoreBundle:Article" #2 should have title in "Test title"
    And entity "RiverwayCmsCoreBundle:Article" #2 should have template in "post.html.twig"

  Scenario: Updated
    And I send a POST request to "/admin/article/1/edit" with parameters:
      | key                   | value          |
      | app_article[title]    | Test title123  |
      | app_article[template] | post.html.twig |
      | app_article[uri]      | /test-test     |
    And the response status code should be 201
    And entity "RiverwayCmsCoreBundle:Article" #1 should have title in "Test title123"


    #  Scenario: Update successful
#    Given the following categories exist:
#      | type | name        | parent |
#      | 1    | category_1  |        |
#      | 2    | category_2  |        |
#    And I send a POST request to "/admin/article/1/edit" with parameters:
#      | key                   | value          |
#      | app_article[title]    | Test title1    |
#      | app_article[template] | post.html.twig |
#      | app_article[category] | 2              |
#    And the response status code should be 201

  Scenario: Remove article
    And I send a DELETE request to "/admin/article/1/delete"
    And the response status code should be 200