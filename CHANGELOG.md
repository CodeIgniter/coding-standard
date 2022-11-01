# Changelog

All notable changes to this library will be documented in this file.

This project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [v1.7.0](https://github.com/CodeIgniter/coding-standard/compare/v1.6.2...v1.7.0) - 2022-11-01

- Bump php-cs-fixer to v3.13
- Add 'case_sensitive' option to 'general_phpdoc_annotation_remove'
- Add 'closure_fn_spacing' option to 'function_declaration'

## [v1.6.2](https://github.com/CodeIgniter/coding-standard/compare/v1.6.1...v1.6.2) - 2022-10-30

- Grouped `runTestsInSeparateProcess`, `runInSeparateProcess`, `preserveGlobalState` together

## [v1.6.1](https://github.com/CodeIgniter/coding-standard/compare/v1.6.0...v1.6.1) - 2022-10-20

- Changed `@internal` description of class CodeIgniter4 to avoid warnings in phpstorm

## [v1.6.0](https://github.com/CodeIgniter/coding-standard/compare/v1.5.0...v1.6.0) - 2022-10-15

- Bump php-cs-fixer version to v3.12 minimum
- Enable `no_useless_concat_operator`
- Update action workflows

## [v1.5.0](https://github.com/CodeIgniter/coding-standard/compare/v1.4.0...v1.5.0) - 2022-09-13

- Enable `ensure_single_space` option of `whitespace_after_comma_in_array`
- Use the `space_multiple_catch` option of `types_spaces`
- Fix multi-lines
- Add `group_to_single_imports` option to `single_import_per_statement`
- chore: fix editorconfig (#4)
- docs: add CONTRIBUTING.md (#3)
- Enable `date_time_create_from_format_call`
- Add options to `new_with_braces`
- Add `order` option to `phpdoc_order`
- Add the `trailing_comma_single_line` option to `function_declaration`
- Enable `curly_braces_position`
- Enable `single_line_comment_spacing`
- Enable `no_trailing_comma_in_singleline`
- Normalize composer.json
- Add "static analysis" Composer keyword (#2)
- Add `inline_constructor_arguments` option to `class_definition`
- Enable `statement_indentation`
- Enable `no_useless_nullsafe_operator`
- Enable `no_multiple_statements_per_line`
- Enable `control_structure_braces`
- Enable `blank_line_between_import_groups`
- Remove deprecated fixers
- Configure `groups` option in `phpdoc_separation` rule
- Bump php-cs-fixer version

## [v1.4.0](https://github.com/CodeIgniter/coding-standard/compare/v1.3.0...v1.4.0) - 2022-02-09

- Permit use of latest php-cs-fixer v3.6.0

## [v1.3.0](https://github.com/CodeIgniter/coding-standard/compare/v1.2.0...v1.3.0) - 2022-01-15

- Fix GHA workflows
- Bump versions
    - PHP 7.4 minimum
    - friendsofphp/php-cs-fixer v3.4.0
    - phpstan/phpstan v1.0 minimum
- Enable `ordered_class_elements` rule
- Enable `global_namespace_import` rule (#1)
- Use `GITHUB_TOKEN` so that secrets can be passed to PRs

## [v1.2.0](https://github.com/CodeIgniter/coding-standard/compare/v1.1.0...v1.2.0) - 2021-10-18

- Bump `friendsofphp/php-cs-fixer` to v3.2 minimum
- Change behavior of `class_attributes_separation` rule
- Add support for new fixers added in php-cs-fixer v3.2.0
- Enable `no_alternative_syntax` rule

## [v1.1.0](https://github.com/CodeIgniter/coding-standard/compare/v1.0.0...v1.1.0) - 2021-08-31

- Bump to `friendsofphp/php-cs-fixer` v3.1.0
- Fix release script
- Bump to `nexusphp/cs-config` v3.3.0

## [v1.0.0](https://github.com/CodeIgniter/coding-standard/releases/tag/v1.0.0) - 2021-08-29

Initial release.
