Feature: Sidebar management
  As administrator and other user
  I need to be able to edit sidebar entity

  Background:
    Given I add "Accept" header equal to "application/json"
    And the following sidebar exist:
      | name          |
      | SidebarExist  |
    And the following widgets exist:
      | name                                                    | article | type   | sequence | sidebar |
      | Riverway\Cms\CoreBundle\Widget\Realisation\EditorWidget | 1       | EDITOR | 1        | 1       |
      | Riverway\Cms\CoreBundle\Widget\Realisation\EditorWidget | 1       | EDITOR | 2        | 1       |

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

# TODO  'name' changed successful, 'sequence' - error

#  Scenario: I can edit some sidebar
#    When I send a POST request to "/admin/sidebar/1/edit" with parameters:
#      | key                               | value  |
#      | app_sidebar[name]                 | change |
#      | app_sidebar[widgets][0][sequence] | 2      |
#      | app_sidebar[widgets][1][sequence] | 1      |
#    Then the response status code should be 201