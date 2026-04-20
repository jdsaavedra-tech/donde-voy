import { test, expect } from '@playwright/test';

test.describe('Places - Flujo CRUD completo', () => {
  test('debe crear, editar y eliminar un local', async ({ page }) => {
    const initialName = `Cafe PW ${Date.now()}`;
    const updatedName = `${initialName} Editado`;

    await page.goto('/places');
    await expect(page).toHaveURL(/\/places$/);

    // Crear
    await page.getByRole('link', { name: /nuevo local/i }).click();
    await expect(page).toHaveURL(/\/places\/create$/);

    await page.locator('input[name="name"]').fill(initialName);
    await page.locator('input[name="category"]').fill('Café');
    await page.locator('input[name="address"]').fill('Av. Rivadavia 1234');
    await page.locator('input[name="neighborhood"]').fill('Caballito');
    await page.locator('[name="description"]').fill('Local creado automáticamente con Playwright');

    await page.getByRole('button', { name: /guardar/i }).click();

    await expect(page).toHaveURL(/\/places$/);
    await expect(page.locator('.alert-success')).toBeVisible();

    const createdRow = page.locator('tr', { hasText: initialName });
    await expect(createdRow).toBeVisible();
    await expect(createdRow).toContainText('Café');
    await expect(createdRow).toContainText('Caballito');

    // Editar
    await createdRow.getByRole('link', { name: /editar/i }).click();
    await expect(page).toHaveURL(/\/places\/\d+\/edit$/);

    await page.locator('input[name="name"]').fill(updatedName);
    await page.locator('input[name="category"]').fill('Restaurante');
    await page.locator('input[name="address"]').fill('Av. Directorio 555');
    await page.locator('input[name="neighborhood"]').fill('Flores');
    await page.locator('[name="description"]').fill('Local editado automáticamente con Playwright');

    await page.getByRole('button', { name: /actualizar|guardar/i }).click();

    await expect(page).toHaveURL(/\/places$/);
    await expect(page.locator('.alert-success')).toBeVisible();

    const updatedRow = page.locator('tr', { hasText: updatedName });
    await expect(updatedRow).toBeVisible();
    await expect(updatedRow).toContainText('Restaurante');
    await expect(updatedRow).toContainText('Flores');

    // Eliminar
    await updatedRow.getByRole('link', { name: /eliminar/i }).click();

    await expect(page.locator('.alert-success')).toBeVisible();
    await expect(page.locator('tr', { hasText: updatedName })).toHaveCount(0);

    await page.waitForTimeout(3000);
  });
});