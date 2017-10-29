Feature: Tag management
  As administrator and user
  I need to be able to edit tag entity

  Background:
    Given I add "Accept" header equal to "application/json"
    Given the following tags exist:
      | name |
      | tag1 |
      | tag2 |

#  Something went wrong