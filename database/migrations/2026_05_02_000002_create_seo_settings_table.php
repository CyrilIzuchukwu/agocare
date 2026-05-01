<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up(): void
  {
    Schema::create('seo_settings', function (Blueprint $table) {
      $table->id();

      // Basic SEO
      $table->string('meta_title')->nullable();
      $table->text('meta_description')->nullable();
      $table->text('meta_keywords')->nullable();
      $table->enum('robots', ['index, follow', 'noindex, nofollow', 'index, nofollow', 'noindex, follow'])
        ->default('index, follow');
      $table->string('canonical_url')->nullable();

      // Open Graph (Facebook / LinkedIn)
      $table->string('og_title')->nullable();
      $table->text('og_description')->nullable();
      $table->string('og_image')->nullable();
      $table->enum('og_type', ['website', 'article', 'organization'])->default('website');

      // Twitter Card
      $table->enum('twitter_card', ['summary', 'summary_large_image'])->default('summary_large_image');
      $table->string('twitter_title')->nullable();
      $table->text('twitter_description')->nullable();
      $table->string('twitter_image')->nullable();
      $table->string('twitter_site')->nullable();   // @handle

      // Schema / Structured Data
      $table->string('schema_type')->default('Organization');
      $table->string('schema_name')->nullable();
      $table->string('schema_url')->nullable();
      $table->string('schema_logo')->nullable();

      // Analytics & Verification
      $table->text('google_analytics_id')->nullable();
      $table->text('google_tag_manager_id')->nullable();
      $table->text('google_site_verification')->nullable();
      $table->text('facebook_pixel_id')->nullable();

      $table->timestamps();
    });
  }

  public function down(): void
  {
    Schema::dropIfExists('seo_settings');
  }
};
