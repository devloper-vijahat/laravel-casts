# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/en/1.0.0/)
and this project adheres to [Semantic Versioning](http://semver.org/spec/v2.0.0.html).

## Unreleased
### Fixed
- issue with date field on invalid date format.
- issue with telephone field label not showing.

## [0.12.5] - 2020-07-26
### Fixed
- further combobox errors.

### Working On
- improving combobox functionality beyond just relationships.

## [0.12.4] - 2020-05-08
### Fixed
- errors with combobox.

## [0.12.3] - 2020-05-08
### Fixed
- population of selected value for combobox.

## [0.12.2] - 2020-05-05
### Fixed
- asset injection to better identify Ignition error pages.

## [0.12.1] - 2020-05-05
### Fixed
- asset injection issue on error pages.

## [0.12.0] - 2020-05-05
### Fixed
- asset injection error that prevented Facade Ignition from showing errors.

### Removed
- Bootstrap 3 and Bootstrap 4 functionality.

## [0.11.14] - 2020-04-20
### Fixed
- subform label not rendering correctly.

## [0.11.13] - 2020-04-20
### WIP

## [0.11.12] - 2020-04-20
### Fixed
- submit button label on subforms.

## [0.11.11] - 2020-04-20
### Added
- working implementation of subforms.

## [0.11.10] - 2020-04-20
### Added
- initial functionality for subcomponents, but not yet fully functional.

## [0.11.9] - 2020-04-19
### Added
- implementation of combobox subforms.

## [0.11.8] - 2020-04-17
### Fixed
- combobox having a null value.

## [0.11.7] - 2020-04-16
### Fixed
- combobox handling of existing selection.

## [0.11.6] - 2020-03-22
### Fixed
- asset injection to not break view, so that HTTP tests still work.

## [0.11.5] - 2020-03-07
### Added
- searchField option to allow separation of database query search field and display field.

## [0.11.4] - 2020-03-06
### Fixed
- combobox to not be case sensitive when searching.

### Removed
- pre-Laravel 7 and temporary dependencies.

## [0.11.3] - 2020-03-03
### Fixed
- combobox.

## [0.11.2] - 2020-02-29
### Fixed
- asset injection.

## [0.11.1] - 2020-02-29
### Fixed
- dependency conflicts.

## [0.11.0] - 2020-02-29
### Added
- Laravel 7 compatibility.

### Fixed
- asset insertion scripts.

## [0.10.10] - 2020-02-23
### Fixed
- file input field rendering issue for tailwind template.

## [0.10.9] - 2020-02-22
### Fixed
- date and datetime fields to have a proper picker for tailwind.

## [0.10.8] - 2020-02-21
### Updated
- comboboxes to not trigger autocomplete in Safari.
- comboboxes to accept a query.

## [0.10.7] - 2020-02-21
### Added
- autocomplete="off" to comboboxes.

## [0.10.0] - 2019-09-05
### Added
- Laravel 6.0 compatibility.

## [0.7.13] - 19 Jun 2018
### Added
- added `@errors` directive, which lists out all form errors in a bulleted
  list.

## [0.7.12] - 10 Feb 2018
### Added
- Laravel 5.6 compatibility.

### Changed
- tests to use Orchestral test suite.

## [0.7.11] - 3 Feb 2018
### Fixed
- glyphicons in bootstrap 3 forms and switched to fontawesome.

## [0.7.10] - 3 Feb 2018
### Added
- `loadCallback` option to combobox to allow for callbacks while typing, often used for search-as-you-type.

## [0.7.9] - 21 Dec 2017
### Fixed
- values of options in selectRange to match the display text.

## [0.7.8] - 13 Dec 2017
### Fixed
- parenthesis detection for custom blade directives.

## [0.7.7] - 16 Nov 2017
### Fixed
- various rendering bugs and issues ... a maintenance update.

## [0.7.6] - 14 Nov 2017
### Fixed
- scrutinizer configuration.
- offset for buttons and controls without labels in horizontal forms.

## [0.7.5] - 13 Nov 2017
### Added
- radio, select drop-downs, and button to Tailwind rendering.

## [0.7.4] - 13 Nov 2017
### Added
- checkbox form control to Tailwind rendering

### Fixed
- button height to match form control height

## [0.7.3] - 12 Nov 2017
### Added
- horizontal form rendering for Tailwind.

### Fixed
- help-text, validation status, submit button rendering.
- tests and brought them back to green.

## [0.7.2] - 2017-11-10
### Fixed
- combobox rendering and brought tests to green.
- radio rendering in bootstrap4.

### Changed
- refactoring of selectMonths.

## [0.7.1] - 2017-11-08
- rendering of subform and labels.

## [0.7.0] - 2017-10-13
### Added
- beginnings of TailwindCSS framework compatibility.

## [0.6.15] - 2017-11-08
### Fixed
- rendering of subforms in bootstrap4.

## [0.6.14] - 2017-11-08
### Added
- names format option for `@selectMonths`.

## [0.6.13] - 2017-11-07
### Fixed
- passing classes to labels.

## [0.6.12] - 2017-11-06
### Removed
- errant routes for vue components. Will add back in once components are in place. (Got ahead of myself here.)

## [0.6.11] - 2017-11-04
### Fixed
- multiple rendering issues around labels and combo-boxes.

## [0.6.10] - 2017-11-03
### Fixed
- label rendering issue.


## [0.6.9] - 2017-10-13
### Changed
- class structure by refactoring each form component out to its own class.

## [0.6.8] - 2017-10-08
### Fixed
- radio button component missing in bootstrap view.

## [0.6.7] - 2017-10-08
### Added
- initial implementation of `@range` input field.
- initial implementation of `@color` input field.
- initial implementation of `@search` input field.
- initial implementation of `@week` input field.
- initial implementation of `@month` input field.
- initial implementation of `@tel` input field.

## [0.6.6] - 2017-10-08
### Added
- feature tests and unit tests.
- `@number` form field.
- `@selectMonths` form field.
- `@selectWeekday` form field.

### Updated
- repo to be analyzed with multiple services, SensioLabs Insight, Scrutinizer, Coveralls, Travis.
- readme with badges.

### Removed
- code used for older Laravel versions.
- `slugify()` method in HTML facade.
- the HTML facade and class, instead directly referencing Laravel Collective's.
