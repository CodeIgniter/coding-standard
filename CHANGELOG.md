# Changelog

All notable changes to this library will be documented in this file.

This project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [v1.7.14](https://github.com/CodeIgniter/coding-standard/compare/v1.7.13...v1.7.14) - 2024-02-25

- Bump php-cs-fixer to v3.49
- Enable `string_implicit_backslashes` fixer
- Add/remove property-read and property-write
- Enable `phpdoc_list_type`
- Bump to php-cs-fixer v3.50
- Enable `allow_hidden_params` option
- also align `@phpstan-type` and `@phpstan-var`
- Enable `phpdoc_array_type`

## [v1.7.13](https://github.com/CodeIgniter/coding-standard/compare/v1.7.12...v1.7.13) - 2024-01-27

- Update GHA workflows
- Bump to php-cs-fixer v3.47
- Disable all new rules in v3.47
- Apply new options to `phpdoc_align` fixer
- Bump actions/cache from 3 to 4 (#17)

## [v1.7.12](https://github.com/CodeIgniter/coding-standard/compare/v1.7.11...v1.7.12) - 2023-12-29

- Bump php-cs-fixer to v3.43
- Enable other options of `fully_qualified_strict_types`
- Disable `class_keyword`
- Disable option for `statement_indentation`
- Use default for option of `unary_operator_spaces`

## [v1.7.11](https://github.com/CodeIgniter/coding-standard/compare/v1.7.10...v1.7.11) - 2023-10-13

- Bump to php-cs-fixer v3.35

## [v1.7.10](https://github.com/CodeIgniter/coding-standard/compare/v1.7.9...v1.7.10) - 2023-10-01

- Bump to php-cs-fixer v3.34
- Bump to php-cs-fixer v3.30
- Fix tag name in release

## [v1.7.9](https://github.com/CodeIgniter/coding-standard/compare/v1.7.8...v1.7.9) - 2023-09-18

- Update release.yml
- Add `long_to_shorthand_operator` (#13)
- Bump actions/checkout from 3 to 4 (#12)

## [v1.7.8](https://github.com/CodeIgniter/coding-standard/compare/v1.7.7...v1.7.8) - 2023-08-30

- Add `case_sensitive` option to order fixers

## [v1.7.7](https://github.com/CodeIgniter/coding-standard/compare/v1.7.6...v1.7.7) - 2023-08-15

- Specify force option for `php_unit_data_provider_static` fixer

## [v1.7.6](https://github.com/CodeIgniter/coding-standard/compare/v1.7.5...v1.7.6) - 2023-08-15

- Enable 'php_unit_data_provider_static'
- Add new fixers in php-cs-fixer v3.23
- Add `yield_from_array_to_yields`
- Enable `php_unit_data_provider_name`
- Use all available checked tokens for `no_extra_blank_lines`
- Configure `php_unit_data_provider_return_type`
- Remove parallel.timeout in phpstan.neon.dist

## [v1.7.5](https://github.com/CodeIgniter/coding-standard/compare/v1.7.4...v1.7.5) - 2023-07-15

- Configure new fixers in php-cs-fixer v3.20

## [v1.7.4](https://github.com/CodeIgniter/coding-standard/compare/v1.7.3...v1.7.4) - 2023-06-19

- Bump php-cs-fixer to v3.18
- fix: ruleset deprecated on `v3.18` (#10)
- Add case_sensitive option to ordered_class_elements
- Add missing rules

## [v1.7.3](https://github.com/CodeIgniter/coding-standard/compare/v1.7.2...v1.7.3) - 2023-05-05

- Replace `single_space_after_construct` with `single_space_around_construct`
- Remove deprecated `braces` rules
- Bump php-cs-fixer to v3.16

## [v1.7.2](https://github.com/CodeIgniter/coding-standard/compare/v1.7.1...v1.7.2) - 2023-03-05

- Bump php-cs-fixer to v3.14

## [v1.7.1](https://github.com/CodeIgniter/coding-standard/compare/v1.7.0...v1.7.1) - 2022-12-22

- Fix php-cs-fixer version to 3.13.0

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
