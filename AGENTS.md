# Agent Instructions for l3aro/filament-tree

## Build/Lint/Test Commands

- **Test all**: `composer test` or `vendor/bin/pest`
- **Single test**: `vendor/bin/pest --filter="test name"` or `vendor/bin/pest tests/SpecificTest.php`
- **Static analysis**: `composer analyse` or `vendor/bin/phpstan analyse`
- **Format code**: `composer format` or `vendor/bin/pint`
- **Build JS/CSS**: `npm run build`
- **Dev mode**: `npm run dev`

## Code Style Guidelines

- **PHP**: Laravel Pint preset, PSR-4 autoloading (`l3aro\FilamentTree\`), PHPStan level 4
- **JavaScript**: Prettier (no semicolons, single quotes, trailing commas)
- **Formatting**: 4 spaces indentation, LF line endings, trim trailing whitespace
- **Naming**: PascalCase classes, camelCase methods/properties, snake_case files
- **Imports**: Group by type (Laravel core, third-party, local), alphabetical within groups
- **Types**: Use PHP 8.2+ features, generic array types in docblocks
- **Error handling**: Laravel conventions, throw exceptions for invalid states

## Git Conventions

- **Commit messages**: When user says "commit", draft conventional commit messages following [Conventional Commits](https://conventionalcommits.org/) format
- **Commit workflow**: Hold drafted commits for user adjustment until they explicitly approve with "good to go" or similar confirmation
- **Commit types**: Use `feat:`, `fix:`, `docs:`, `style:`, `refactor:`, `test:`, `chore:` prefixes as appropriate</content>
