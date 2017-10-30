Feature: Sidebar management
  As administrator and other user
  I need to be able to edit sidebar entity

  Background:
    Given I add "Accept" header equal to "application/json"
    And the following sidebar exist:
      | name          |
      | SidebarExist  |
    And the following widgets exist:
      | name                                                    | type   | sequence | sidebar |
      | Riverway\Cms\CoreBundle\Widget\Realisation\EditorWidget | EDITOR | 0        | 1       |
      | Riverway\Cms\CoreBundle\Widget\Realisation\EditorWidget | EDITOR | 1        | 1       |

  Scenario: I can create sidebar
    When I send a POST request to "/admin/sidebar/create" with parameters:
      | key               | value        |
      | app_sidebar[name] | sidebarTest  |
    Then the response status code should be 201
    And entity "RiverwayCmsCoreBundle:Sidebar" #2 should have name in "sidebarTest"
    And entity Widget #1 should have Sidebar id in 1

  Scenario: Validation before sidebar creation
    When I send a POST request to "/admin/sidebar/create" with parameters:
      | key               | value |
      | app_sidebar[name] |       |
    Then the response status code should be 500

  Scenario: I can edit some sidebar
    When I send a POST request to "/admin/sidebar/1/edit" with parameters:
      | key                               | value  |
      | app_sidebar[name]                 | change |
      | app_sidebar[widgets][0][sequence] | 2      |
      | app_sidebar[widgets][1][sequence] | 1      |
      | app_sidebar[save]                 | 1      |
    Then the response status code should be 201
    And entity "RiverwayCmsCoreBundle:Sidebar" #1 should have name in change
    And entity "RiverwayCmsCoreBundle:Widget" #1 should have sequence in 2
    And entity "RiverwayCmsCoreBundle:Widget" #2 should have sequence in 1