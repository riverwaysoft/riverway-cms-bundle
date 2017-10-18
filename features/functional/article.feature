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

  Scenario: Fetch data in json
    And I send a GET request to "/test"
    And the response status code should be 200
    And the response should be in JSON
    And the JSON should be equal to:
    """
    {
      "article": {
          "category": null,
          "creator": "john",
          "featured_image": null,
          "id": 1,
          "status": 2,
          "status_key": "PUBLISHED",
          "template": "post.html.twig",
          "template_key": "POST",
          "title": "Test1",
          "title_icon": null,
          "uri": "\/test"
      },
      "sidebar": ""
    }
    """

  Scenario: Create article
    And I send a POST request to "/admin/article/create" with parameters:
      | key                   | value          |
      | app_article[title]    | Test title     |
      | app_article[template] | post.html.twig |
    And the response status code should be 201
    And entity "RiverwayCmsCoreBundle:Article" #2 should have title in "Test title"
    And entity "RiverwayCmsCoreBundle:Article" #2 should have template in "post.html.twig"

  Scenario: Validation errors article
    And I send a POST request to "/admin/article/1/edit" with parameters:
      | key                | value         |
      | app_article[title] | Changed title |
    And the response status code should be 400
    And the JSON should be equal to:
    """
    {
        "children": {
            "title": {},
            "template": {
                "errors": [
                    "This value should not be blank."
                ],
                "children": [
                    {},
                    {},
                    {},
                    {},
                    {}
                ]
            },
            "uri": {},
            "titleIcon": {},
            "widgets": {
                "children": [
                    {
                        "children": {
                            "sequence": {}
                        }
                    }
                ]
            },
            "featuredImage": {},
            "category": {},
            "tags": {},
            "sidebar": {}
        }
    }
    """

  Scenario: Updated
    And I send a POST request to "/admin/article/1/edit" with parameters:
      | key                               | value          |
      | app_article[title]                | Changed title  |
      | app_article[template]             | post.html.twig |
      | app_article[uri]                  | /test-test     |
      | app_article[widgets][0][sequence] | 1              |
    And the response status code should be 201


  Scenario: Remove article
    And I send a DELETE request to "/admin/article/1/delete"
    And the response status code should be 200
