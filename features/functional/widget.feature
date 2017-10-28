Feature: Widget management
  As administrator and other user
  I need to be able to edit widget entity

  Background:
    Given I add "Accept" header equal to "application/json"

  Scenario: I can create some widget for article
    Given the following articles exist:
      | template | title | uri   | status    | creator |
      | POST     | Test1 | /test | PUBLISHED | john    |
    When I send a GET request to "/admin/widget/create-for-article/1" with parameters:
      | key               | value                                         |
      | type              | AppBundle\Widget\PopProduct\PopProductWidget  |
    Then the response status code should be 201
    And entity "RiverwayCmsCoreBundle:Widget" #1 should have html_content in "Hello world!"
    And entity "RiverwayCmsCoreBundle:Widget" #1 should have name in "AppBundle\Widget\PopProduct\PopProductWidget"
    And entity "RiverwayCmsCoreBundle:Widget" #1 should have sequence in 0
    And entity Widget #1 should have Article id in 1
#    And entity Widget #1 should have Sidebar id in 0

  Scenario: I can create some widget for sidebar
    Given the following sidebar exist:
      | name         |
      | SidebarTest  |
    When I send a GET request to "/admin/widget/create-for-sidebar/1" with parameters:
      | key               | value                                         |
      | type              | AppBundle\Widget\PopProduct\PopProductWidget  |
    Then the response status code should be 201
    And entity "RiverwayCmsCoreBundle:Widget" #1 should have html_content in "Hello world!"
    And entity "RiverwayCmsCoreBundle:Widget" #1 should have name in "AppBundle\Widget\PopProduct\PopProductWidget"
    And entity "RiverwayCmsCoreBundle:Widget" #1 should have sequence in 0
#    And entity Widget #1 should have Article id in 0
    And entity Widget #1 should have Sidebar id in 1

#  Scenario: I can remove any widget
#    Given the following widgets exist:
#      | name                                                    | article | type   | sequence |
#      | Riverway\Cms\CoreBundle\Widget\Realisation\EditorWidget | 1       | EDITOR | 1        |
#    When I send a DELETE request to "/admin/widget/delete" with parameters:
#      | key | value |
#      | id  | 1     |

  Scenario: I can available to open form with some widget
    Given the following widgets exist:
      | name                                                    | article | type   | sequence |
      | Riverway\Cms\CoreBundle\Widget\Realisation\EditorWidget | 1       | EDITOR | 1        |
    When I send a GET request to "/admin/widget/1/form" with parameters:
      | key        | value  |
      | widget[id] | 1      |
    Then the response status code should be 200

  Scenario: I can available to see preview of some widget
    Given the following widgets exist:
      | name                                                    | article | type   | sequence | html_content |
      | Riverway\Cms\CoreBundle\Widget\Realisation\EditorWidget | 1       | EDITOR | 1        | html_test    |
    When I send a GET request to "/admin/widget/1/preview" with parameters:
      | key        | value  |
      | widget[id] | 1      |
    Then the response status code should be 200
    And the response should contain "html_test"