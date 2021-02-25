<?php

namespace Tideways {
    class Profiler {
        private function __construct() {}

        public static function isStarted(): bool {}

        public static function isTracing(): bool {}

        public static function isProfiling(): bool {}

        public static function containsDeveloperTraceRequest(): bool {}

        /**
         * @psalm-param string|array{api_key: string, service: string, sample_rate: int} $options
         * @param string|array $options
         */
        public static function start($options): void {}

        public static function stop(): void {}

        public static function ignoreTransaction(): void {}

        public static function logFatal(string $message, string $file, int $line, ?string $type = null, ?array $trace = null) {}

        public static function logException(\Throwable $exception) {}

        public static function getTransactionName(): ?string {}

        public static function setTransactionName(string $transactionName): void {}

        public static function detectTransactionFunction(string $functionName): void {}

        public static function detectExceptionFunction(string $functionName): void {}

        public static function triggerCallgraphOn(string $functionName): void {}

        public static function watch(string $functionName): void {}

        public static function watchCallback(string $functionName, callable $callback): void {}

        public static function enableCallgraphProfiler(): bool {}

        public static function disableCallgraphProfiler(): bool {}

        public static function enableTracingProfiler(): bool {}

        public static function disableTracingProfiler(): bool {}

        public static function addEventMarker(string $eventName): void {}

        public static function setCustomVariable(string $name, $value): void {}

        public static function currentTraceId(): ?string {}

        public static function setServiceName(string $serviceName): void {}

        public static function createSpan(string $category): Profiler\Span {}

        public static function generateServerTimingHeaderValue(): string {}
    }
}

namespace Tideways\Profiler {
    class Span
    {
        private function __construct() {}

        public function getId(): string {}

        public function annotate(array $annotations): void {}

        public function logException(\Throwable $exception): void {}

        public function finish(): void {}
    }
}
