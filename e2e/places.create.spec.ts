import { test, expect } from '@playwright/test';

test.describe('Places - Crear local', () => {
  test('debe crear un nuevo local y mostrarlo en el listado', async ({ page }) => {
    const uniqueName = `Cafe PW ${Date.now()}`;

    await page.goto('/places');
    await expect(page).toHaveURL(/\/places$/);

    await page.getByRole('link', { name: /nuevo local/i }).click();
    await expect(page).toHaveURL(/\/places\/create$/);

    await page.locator('input[name="name"]').fill(uniqueName);
    await page.locator('input[name="category"]').fill('Café');
    await page.locator('input[name="address"]').fill('Av. Rivadavia 1234');
    await page.locator('input[name="neighborhood"]').fill('Caballito');
    await page.locator('[name="description"]').fill('Local creado automáticamente con Playwright');

    await page.getByRole('button', { name: /guardar/i }).click();

    await expect(page).toHaveURL(/\/places$/);
    await expect(page.locator('.alert-success')).toBeVisible();
    await expect(page.locator('.alert-success')).toContainText(/creado|guardado|éxito|success/i);

    const createdRow = page.locator('tr', { hasText: uniqueName });

    await expect(createdRow).toBeVisible();
    await expect(createdRow).toContainText('Café');
    await expect(createdRow).toContainText('Caballito');

    await page.waitForTimeout(3000);
  });
});